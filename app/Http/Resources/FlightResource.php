<?php

namespace App\Http\Resources;

use App\Models\Airport;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
{
    protected $airlines = [];

    protected $maxPrice;
    protected $minPrice;

    protected $trip;
    protected $currencyCode;
    protected $classType;
    protected $adults;
    protected $childs;
    protected $infants;

    public function __construct($resource, ...$params)
    {
        parent::__construct($resource);

        $this->currencyCode = 'usd';

        $this->trip = $params[0];
        $this->classType = $params[1];
        $this->adults = $params[2];
        $this->childs = $params[3];
        $this->infants = $params[4];
    }

    public function toArray($request)
    {
        return [
            'total' => $this->resource->meta->count,
            'filter' => [
                'locations' => $this->filterLocation(),
                'aircraft' => $this->filterAircrafts(),
                'carriers' => $this->filterCarriers(),
            ],
            'segments' => $this->buildSegments(),
        ];
    }

    // SEGMENTS
    protected function buildSegments()
    {
        $segments = collect([]);

        foreach ($this->resource->data as $data) {
            $returnArray = collect([]);

            foreach ($data->itineraries as $itinerary) {
                $subArray = collect([]);

                foreach ($itinerary->segments as $segment) {
                    $arrivalDate = Carbon::parse($segment->arrival->at)->format('d/m/Y h:i:A');
                    $departureDate = Carbon::parse($segment->departure->at)->format('d/m/Y h:i:A');

                    $airlineName = getAirlineName($segment->carrierCode);

                    if (!in_array($airlineName, $this->airlines)) {
                        array_push($this->airlines, $airlineName);
                    }

                    $airline_code = $segment->carrierCode;
                    $airline_number = $segment->number;

                    $departure_time = $this->parseDate($departureDate)[1];
                    $departure_date = $this->parseDate($departureDate)[0];
                    $arrival_date = $this->parseDate($arrivalDate)[0];
                    $arrival_time = $this->parseDate($arrivalDate)[1];

                    $departure_code = $segment->departure->iataCode;
                    $departure_airport = $this->getAirportName($departure_code);

                    $arrival_code = $segment->arrival->iataCode;
                    $arrival_airport = $this->getAirportName($arrival_code);

                    $duration_time = $segment->duration;
                    $currency_code = $this->currencyCode ?? $segment->price->currency;
                    $price = $data->price->total;

                    if ($price > $this->maxPrice) {
                        $this->maxPrice = $price;
                    }
                    if ($price > $this->minPrice) {
                        $this->minPrice = $price;
                    }

                    $class_type = $this->classType;

                    $hidden_parameters = (object) [
                        'carrier_code' => $segment->carrierCode,
                        'iataCode_departure' => $departure_code,
                        'iataCode_arrival' => $arrival_code,
                        'departure_at' => $segment->departure->at,
                        'arrival_at' => $segment->arrival->at,
                        'travelclass' => '', //$segment->pricingDetailPerAdult->travelClass,
                        'seats' => '', //$segment->pricingDetailPerAdult->availability,
                        'totalpassengers' => $this->adults + $this->childs + $this->infants,
                        'madult' => $this->adults,
                        'pricePerAdulttotal' => '', //calculate_commission($offerItems->pricePerAdult->total,$data->commission),
                        'pricePerAdulttotalTaxes' => '', //$offerItems->pricePerAdult->totalTaxes,
                        'mchildren' => $this->childs,
                        'pricePerChildtotal' => '', //calculate_commission($offerItems->pricePerChild->total,$data->commission),
                        'pricePerChildtotalTaxes' => '', //$offerItems->pricePerChild->totalTaxes,
                        'minfant' => $this->infants,
                        'pricePerInfanttotal' => '', //calculate_commission($offerItems->pricePerInfant->total,$data->commission),
                        'pricePerInfanttotalTaxes' => '', //$offerItems->pricePerInfant->totalTaxes,
                        'seniors' => intval(0),
                        'currency' => $this->currencyCode,
                        'currencysymbol' => '', //$ci->session->userdata("currencysymbol"),
                        'total_with_commission' => '', //calculate_commission($offerItems->price->total,$data->commission),
                        'total' => $data->price->total,
                        'totalTaxes' => 100, //$data->price->totalTaxes,
                        'pricePerSeniortotal' => '',
                        'pricePerSeniortotalTaxes' => '',
                    ];

                    //$form = $this->hiddenParameters($hidden_parameters);

                    $subArray = $subArray->push([
                        'airline_code' => $airline_code,
                        'airline_number' => $airline_number,
                        'departure_time' => $departure_time,
                        'departure_date' => $departure_date,
                        'arrival_date' => $arrival_date,
                        'arrival_time' => $arrival_time,
                        'departure_code' => $departure_code,
                        'departure_airport' => $departure_airport,
                        'arrival_code' => $arrival_code,
                        'arrival_airport' => $arrival_airport,
                        'duration_time' => $duration_time,
                        'currency_code' => strtoupper($currency_code),
                        'price' => $price,
                        'airline_name' => $airlineName,
                        'booking_class' => $class_type,
                        //'form' => $form,
                    ]);
                }

                $returnArray = $returnArray->push($subArray->toArray());
            }

            $segments = $segments->push($returnArray->toArray());
        }

        return $segments->toArray();
    }

    // FILTERS
    protected function filterLocation()
    {
        return collect($this->resource->dictionaries->locations)->map(function ($i) {
            return $i->cityCode;
        })->values()->toArray();
    }

    protected function filterAircrafts()
    {
        return collect($this->resource->dictionaries->aircraft)->toArray();
    }

    protected function filterCarriers()
    {
        return collect($this->resource->dictionaries->carriers)->toArray();
    }

    // HELPERS
    private function parseDate($dataString)
    {
        $dataArray = explode(' ', $dataString);

        return $dataArray;
    }

    private function getAirportName($code)
    {
        if ($airport = Airport::where('code', $code)->first()) {
            return $airport->city_name . ' - ' . $airport->name . ' (' . $airport->code . ')';
        }

        return '';
    }
}
