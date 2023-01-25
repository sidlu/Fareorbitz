<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlightResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    protected $id = 0;
    protected $token;
    protected $api;

    public function __construct()
    {

        $this->api = config('project.amadeus.url.base');
		
    }

    public function index(Request $request, $searchCriteria)
    {
        $explodedSearch = explode('/', $searchCriteria);
        $countOfSearch = count($explodedSearch);

        $trip = $countOfSearch === 8 ? 'oneway' : ($countOfSearch === 9 ? 'return' : 'multi');

        $currency = session()->get('currency');
        $flightType = $explodedSearch[$countOfSearch - 4];
        $adults = $explodedSearch[$countOfSearch - 3];
        $child = $explodedSearch[$countOfSearch - 2];
        $infant = $explodedSearch[$countOfSearch - 1];

        if ($this->getToken($this->api)) {
            if ($trip !== 'multi') {
                $from = $explodedSearch[0];
                $to = $explodedSearch[1];
                $depart = $explodedSearch[2];

                $queryData = [
                    'originLocationCode' => strtoupper($from),
                    'destinationLocationCode' => strtoupper($to),
                    'travelClass' => strtoupper($flightType),
                    'currencyCode' => $currency,
                    'departureDate' => Carbon::parse($depart)->isoFormat('YYYY-MM-DD'),
                    'adults' => $adults,
                    'children' => $child,
                    'infants' => $infant,
                    //'max' => 2,
                ];

                if ($trip === 'return') {
                    $queryData = array_merge($queryData, ['returnDate' => Carbon::parse($explodedSearch[3])->isoFormat('YYYY-MM-DD')]);
                }
            } else {
                $queryData = array_merge([
                    //'searchCriteria' => ['maxFlightOffers' => 2],
                    'currencyCode' => $currency,
                    'travelClass' => strtoupper($flightType),
                ], $this->makeQueryForMultiSearch($explodedSearch, $adults, $child, $infant));
            }

            $searchResponse = $trip !== 'multi'
                ? Http::withToken($this->token)->get($this->api . config('project.amadeus.url.flights'), $queryData)
                : Http::withToken($this->token)->post($this->api . config('project.amadeus.url.flights'), $queryData);

            if ($searchResponse->status() === 401) {
                session()->forget('access_token');

                return $this->index($request, $searchCriteria);
            }

            if ($searchResponse->ok()) {
                $response = !blank($searchResponse->object()->data) ? (new FlightResource($searchResponse->object(), $trip, $flightType, $adults, $child, $infant))->toArray($request) : ['total' => 0];

                return view('search', ['flightData' => $response, 'search' => ['from' => $from ?? '', 'to' => $to ?? '', 'trip' => $trip, 'flight_type' => $flightType, 'depart' => $depart ?? '', 'returning' => $returning ?? now(), 'adults' => $adults, 'childs' => $child, 'infants' => $infant]]);
            }

            return $this->errorResponseFromAmadeus($searchResponse->body(), json_encode($queryData));
        }

        return $this->apiKeyErrorResponse();
    }

    public function airportAutocomplete(Request $request)
    {
        if ($this->getToken($this->api)) {
            $searchResponse = Http::withToken($this->token)->post($this->api . config('project.amadeus.url.airports'), [
                'subType' => $request->type ?? 'AIRPORT',
                'keyword' => $request->keyword,
            ]);

            if ($searchResponse->status() === 401) {
                session()->forget('access_token');

                return $this->airportAutocomplete($request);
            }

            if ($searchResponse->ok()) {
                return response()->json($searchResponse->body());
            }

            return $this->errorResponseFromAmadeus($searchResponse);
        }

        return $this->apiKeyErrorResponse();
    }

    public function getBestPrice(Request $request)
    {
        $method = $request->getMethod();
        $flightObject = $request->flight_object;
        $forceClass = $request->force_class ?? false;

        if ($this->getToken($this->api)) {
            $response = Http::withToken($this->token)->withHeaders([
                'X-HTTP-Method-Override' => $method,
            ])->post($this->api . config('project.amadeus.url.price'), [
                'priceFlightOffersBody' => $flightObject,
                'include' => ['credit-card-fees', 'bags', 'other-services', 'detailed-fare-rules'],
                'forceClass' => $forceClass,
            ]);

            if ($response->status() === 401) {
                session()->forget('access_token');

                return $this->getBestPrice($request);
            }

            if ($response->ok()) {
                return response()->json($response->body());
            }

            return $this->errorResponseFromAmadeus($response);
        }

        return $this->apiKeyErrorResponse();
    }

    // INTERNAL METHODS
    protected function getToken($api)
    {
        if (session()->has('access_token')) {
            return $this->token = session()->get('access_token');
        }
        if (($response = Http::asForm()->post($api . config('project.amadeus.url.access'), [
            'client_id' => config('project.amadeus.key'),
            'client_secret' => config('project.amadeus.secret'),
            'grant_type' => 'client_credentials',
        ]))->ok()) {
            $token = $response->json()['access_token'];
            session()->put('access_token', $token);

            return $this->token = $token;
        }

        return false;
    }

    protected function errorResponseFromAmadeus($errorResponse, $queryData)
    {
        return dd($errorResponse, $queryData);

        return redirect()->back()->withErrors($errorResponse, $queryData);
    }

    protected function apiKeyErrorResponse()
    {
        return redirect()->back()->withErrors('Internal Error: API KEY!');
    }

    protected function makeQueryForMultiSearch($explodedSearch, $adults, $child, $infant)
    {
        $dataToSearch = collect(array_slice($explodedSearch, 0, count($explodedSearch) - 5));
        $originDestinations = $dataToSearch->chunk(3)->map(function ($i, $k) {
            $i = $i->values()->toArray();

            return [
                'id' => (string) ($k + 1),
                'originLocationCode' => strtoupper($i[0]),
                'destinationLocationCode' => strtoupper($i[1]),
                'departureDateTimeRange' => [
                    'date' => Carbon::parse($i[2])->isoFormat('YYYY-MM-DD'),
                ],
            ];
        });

        $travelers = collect([])->when((int) $adults !== 0, function ($i) {
            return $i->push(['id' => $this->getId(), 'travelerType' => 'ADULT']);
        })->when((int) $child !== 0, function ($i) {
            return $i->push(['id' => $this->getId(), 'travelerType' => 'CHILD']);
        });

        return [
            'sources' => ['GDS'],
            'originDestinations' => $originDestinations->toArray(),
            'travelers' => $travelers->toArray(),
        ];
    }

    protected function getId()
    {
        return $this->id = $this->id + 1;
    }
}
