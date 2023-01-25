<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST')) {
            session()->put('backURL', url()->previous());
        } else {
            return redirect(session()->get('backURL', '/'));
        }

        $routes = collect($this->jsonDecodeVal($request->routes))->toArray();
        $prices = collect($this->jsonDecodeVal($request->prices))->toArray();
        $travellers = collect($this->jsonDecodeVal($request->travellers))->filter(function ($v) {
            return (int) $v !== 0;
        })->toArray();

        $countries = $this->getMappedCountries();
        $type = $request->type;

        return view('confirmation', compact('routes', 'prices', 'travellers', 'countries', 'type'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('GET')) {
            return redirect('/');
        }

        $request->merge(['prices' => collect($this->jsonDecodeVal($request->prices))->toArray()]);
        $request->merge(['routes' => collect($this->jsonDecodeVal($request->routes))->toArray()]);

        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => 'required|email',
            'phone' => 'required',
            // 'address' => 'required',
            // 'nationality' => 'required|exists:countries,iso3',
            'card_holder_name' => 'required',
            'card_number' => 'required',
            'card_expiry_month' => 'required',
            'card_expiry_year' => 'required',
            'card_cvv' => 'required',
            //
            'snationality.*' => 'required|exists:countries,iso3',
            'firstname.*' => 'required',
            'lastname.*' => 'required',
            'traveller_type.*' => 'required',
            'title.*' => 'required',
            'dob_month.*' => 'required',
            'dob_day.*' => 'required',
            'dob_year.*' => 'required',
            'passport.*' => 'required',
            // 'passport_issuance_month.*' => 'required',
            // 'passport_issuance_day.*' => 'required',
            // 'passport_issuance_year.*' => 'required',
            'passport_month.*' => 'required',
            'passport_day.*' => 'required',
            'passport_year.*' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $travellers = collect([]);
        foreach ($data['traveller_type'] as $key => $type) {
            $travellers = $travellers->push([
                'type' => $type,
                'title' => $data['title'][$key],
                'firstname' => $data['firstname'][$key],
                'lastname' => $data['lastname'][$key],
                'nationality' => $data['snationality'][$key],
                'dob_month' => $data['dob_month'][$key],
                'dob_day' => $data['dob_day'][$key],
                'dob_year' => $data['dob_year'][$key],
                'passport' => $data['passport'][$key],
                // 'passport_issuance_month' => $data['passport_issuance_month'][$key]?? '',
                // 'passport_issuance_day' => $data['passport_issuance_day'][$key]?? '',
                // 'passport_issuance_year' => $data['passport_issuance_year'][$key]?? '',
                'passport_month' => $data['passport_month'][$key],
                'passport_day' => $data['passport_day'][$key],
                'passport_year' => $data['passport_year'][$key],
            ]);
        }

        $data['travellers'] = $travellers->toArray();
        $data['flight_object'] = json_decode(json_encode($data['routes']), true);

        unset($data['routes']);
        unset($data['__token']);
        unset($data['traveller_type']);
        unset($data['title']);
        unset($data['firstname']);
        unset($data['lastname']);
        unset($data['snationality']);
        unset($data['dob_month']);
        unset($data['dob_day']);
        unset($data['dob_year']);
        unset($data['passport']);
        unset($data['passport_issuance_month']);
        unset($data['passport_issuance_day']);
        unset($data['passport_issuance_year']);
        unset($data['passport_month']);
        unset($data['passport_day']);
        unset($data['passport_year']);

        if ($model = Booking::create($data)) {
            $data = $model->toArray();
            // $details = [
            // 'UserDetails' => 'Mail from ItSolutionStuff.com',
            // 'body' => 'This is for testing email using smtp',
            // ];
            //Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\PnrMail($details));

            return redirect(route('booking-confirmed', ['pnr' => $data['pnr']]));
        }

        return response()->json(['errors' => ['Internal Server Error!']]);
    }
    public function bookingConfirmed(Request $request, $pnr)
    {
        return view('booking-confirm', compact('pnr'));
    }

    // LOCAL ONLY METHODS
    protected function getMappedCountries()
    {
        return \App\Models\Country::all()->map(function ($country) {
            return [
                'value' => Str::title($country->name),
                'key' => $country->iso3,
            ];
        })->toArray();
    }

    protected function jsonDecodeVal($str)
    {
        return json_decode($this->decodeVal($str));
    }

    protected function decodeVal($str)
    {
        return base64_decode($str);
    }

    public function newTest()
    {
        return $this->store(request()->merge(json_decode('{"prices":"eyJvbmV3YXlfYWR1bHRfcHJpY2UiOiIxMDM2LjcwIiwib25ld2F5X2NoaWxkX3ByaWNlIjoiMTAzNi43MCIsIm9uZXdheV9pbmZhbnRfcHJpY2UiOiIxMDM2LjcwIiwicmV0dXJuX2FkdWx0X3ByaWNlIjoiMTAzNi43MCIsInJldHVybl9jaGlsZF9wcmljZSI6IjEwMzYuNzAiLCJyZXR1cm5faW5mYW50X3ByaWNlIjoiMTAzNi43MCIsImN1cnJlbmN5IjoiQVVEIiwidG90YWwiOjEyNDQwLjQsImZsaWdodF90eXBlIjoicmV0dXJuIn0=","routes":"W1t7ImltZ19jb2RlIjoiQUkucG5nIiwiZGVwYXJ0dXJlX3RpbWUiOiIwOTo0NTpBTSIsImRlcGFydHVyZV9kYXRlIjoiMjBcLzAxXC8yMDIyIiwiYXJyaXZhbF9kYXRlIjoiMjBcLzAxXC8yMDIyIiwiYXJyaXZhbF90aW1lIjoiMTI6NDA6UE0iLCJkZXBhcnR1cmVfY29kZSI6IkRFTCIsImRlcGFydHVyZV9haXJwb3J0IjoiRGVsaGkgLSBEZWxoaSBJbmRpcmEgR2FuZGhpIEludGwgKERFTCkiLCJhcnJpdmFsX2NvZGUiOiJNQUEiLCJhcnJpdmFsX2FpcnBvcnQiOiJDaGVubmFpIC0gQ2hlbm5haSBBcnB0IChNQUEpIiwiZHVyYXRpb25fdGltZSI6IlBUMkg1NU0iLCJjdXJyZW5jeV9jb2RlIjoiQVVEIiwicHJpY2UiOiIxMDM2LjcwIiwiYWlybGluZV9uYW1lIjoiQWlyIEluZGlhIExpbWl0ZWQiLCJib29raW5nX2NsYXNzIjoiZWNvbm9teSJ9XSxbeyJpbWdfY29kZSI6IkFJLnBuZyIsImRlcGFydHVyZV90aW1lIjoiMDk6NDU6QU0iLCJkZXBhcnR1cmVfZGF0ZSI6IjIwXC8wMVwvMjAyMiIsImFycml2YWxfZGF0ZSI6IjIwXC8wMVwvMjAyMiIsImFycml2YWxfdGltZSI6IjEyOjQwOlBNIiwiZGVwYXJ0dXJlX2NvZGUiOiJERUwiLCJkZXBhcnR1cmVfYWlycG9ydCI6IkRlbGhpIC0gRGVsaGkgSW5kaXJhIEdhbmRoaSBJbnRsIChERUwpIiwiYXJyaXZhbF9jb2RlIjoiTUFBIiwiYXJyaXZhbF9haXJwb3J0IjoiQ2hlbm5haSAtIENoZW5uYWkgQXJwdCAoTUFBKSIsImR1cmF0aW9uX3RpbWUiOiJQVDJINTVNIiwiY3VycmVuY3lfY29kZSI6IkFVRCIsInByaWNlIjoiMTAzNi43MCIsImFpcmxpbmVfbmFtZSI6IkFpciBJbmRpYSBMaW1pdGVkIiwiYm9va2luZ19jbGFzcyI6ImVjb25vbXkifV1d","_token":"eYT6Ch8jC380PcHVbXA4sUaecbp0GJqxjcx20UCt","nationality":{"1":"MNG","2":"BFA","3":"TJK"},"firstname":{"1":"Penelope","2":"Wade","3":"Erin"},"lastname":{"1":"Rose","2":"Dennis","3":"Horne"},"email":"user@phptravels.com","phone":"123456","address":"R2, Avenue du Maroc, AU","country_code":"AU","traveller_type":{"1":"infants","2":"childs","3":"adults"},"title":{"1":"Mrs","2":"Miss","3":"Mr"},"dob_month":{"1":"01","2":"08","3":"03"},"dob_day":{"1":"26","2":"17","3":"10"},"dob_year":{"1":"2005","2":"2017","3":"1972"},"passport":{"1":"Adipisci at minima l","2":"Rerum sapiente iusto","3":"Quia mollitia laudan"},"passport_issuance_month":{"1":"02","2":"12","3":"08"},"passport_issuance_day":{"1":"12","2":"14","3":"18"},"passport_issuance_year":{"1":"1984","2":"2008","3":"1991"},"passport_month":{"1":"12","2":"11","3":"05"},"passport_day":{"1":"7","2":"11","3":"12"},"passport_year":{"1":"2003","2":"2019","3":"2016"},"card_holder_name":"Aristotle Clarke","card_number":"601","card_expiry_month":"11","card_expiry_year":"2006","card_cvv":"Dolor sit vel sint f"}', true)));
    }
    
     public function vacationBooking(Request $request){
        $content = '<h3>Vacation Booking</h3><br>';
		$content .= '<p>From City : ' . $request->vaca_from_city . '</p><br>';
		$content .= '<p>To City : ' . $request->vaca_to_city . '</p><br>';
		$content .= '<p>Thank You</p><br>';
		$subject = "New Vacation Booking";

		$to = "operations@fareorbitz.com";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <operations@fareorbitz.com>' . "\r\n";
		mail($to, $subject, $content, $headers);
        $data = [
            'enq_type' => 'Vacation'
        ];
        return view('site.thank-you', compact('data'));
    }
    public function hotelBooking(Request $request){
        $content = '<h3>Hotel Booking</h3><br>';
		$content .= '<p>City : ' . $request->hotels_city . '</p>';
		$content .= '<p>Check In  : ' . $request->check_in . '</p>';
        $content .= '<p>Check Out  : ' . $request->check_out . '</p>';
        $content .= '<p>Rooms  : ' . $request->rooms . '</p>';
        $content .= '<p>Guest  : ' . $request->guest . '</p>';
		$content .= '<p>Thank You</p><br>';
		$subject = "New Hotel Booking";

		$to = "operations@fareorbitz.com";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <operations@fareorbitz.com>' . "\r\n";
		mail($to, $subject, $content, $headers);
        $data = [
            'enq_type' => 'Hotel'
        ];
        return view('site.thank-you', compact('data'));
    }
    public function carBooking(Request $request){
        $content = '<h3>Car Booking</h3><br>';
		$content .= '<p>From City : ' . $request->car_from_city . '</p><br>';
		$content .= '<p>To City : ' . $request->car_to_city . '</p><br>';
		$content .= '<p>Thank You</p><br>';
		$subject = "New Car Booking";

		$to = "operations@fareorbitz.com";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <operations@fareorbitz.com>' . "\r\n";
		mail($to, $subject, $content, $headers);
        $data = [
            'enq_type' => 'Car'
        ];
        return view('site.thank-you', compact('data'));
    }
    public function visaBooking(Request $request){
        $content = '<h3>Car Booking</h3><br>';
		$content .= '<p>Travelling From : ' . $request->travel_from_city . '</p>';
		$content .= '<p>Travelling To : ' . $request->travel_to_city . '</p>';
        $content .= '<p>Visa Purpose : ' . $request->visa_purpose . '</p>';
        $content .= '<p>Travel Date : ' . $request->travel_date . '</p>';
		$content .= '<p>Thank You</p><br>';
		$subject = "New Car Booking";

		$to = "operations@fareorbitz.com";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <operations@fareorbitz.com>' . "\r\n";
		mail($to, $subject, $content, $headers);
        $data = [
            'enq_type' => 'Visa'
        ];
        return view('site.thank-you', compact('data'));
    }
}
