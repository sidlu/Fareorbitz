<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function vacationBooking(Request $request){
        $content = '<h3>Vacation Booking</h3><br>';
		$content .= '<p>Passenger Name : ' . $request->vaca_name . '</p><br>';
		$content .= '<p>Phone No. : ' . $request->vaca_phone . '</p><br>';
		$content .= '<p>Email Id : ' . $request->vaca_email . '</p><br>';
		$content .= '<p>Date of Travel : ' . $request->vaca_date . '</p><br>';
		$content .= '<p>Destination : ' . $request->vaca_destination . '</p><br>';
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
		$guest = $request->hotel_adults + $request->hotel_childs;		
        $content = '<h3>Hotel Booking</h3><br>';
		$content .= '<p>Name : ' . $request->hotels_name . '</p>';
		$content .= '<p>Email : ' . $request->hotels_email . '</p>';
		$content .= '<p>Phone : ' . $request->hotels_phone . '</p>';
		$content .= '<p>City : ' . $request->hotels_city . '</p>';
		$content .= '<p>Check In  : ' . $request->check_in . '</p>';
        $content .= '<p>Check Out  : ' . $request->check_out . '</p>';
        $content .= '<p>Rooms  : ' . $request->rooms . '</p>';
        $content .= '<p>Guest  : ' . $guest . ' (Adults: '.$request->hotel_adults.', Child: '. $request->hotel_child.')</p>';
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
		$content .= '<p>Name : ' . $request->car_name . '</p>';
		$content .= '<p>Email : ' . $request->car_email . '</p>';
		$content .= '<p>Phone : ' . $request->car_phone . '</p>';
		$content .= '<p>Pick-up City : ' . $request->car_from_city . '</p><br>';
		$content .= '<p>Drop-off City : ' . $request->car_to_city . '</p><br>';
		$content .= '<p>Pick-up Date & Time : ' . $request->car_pickup_date . '</p><br>';
		$content .= '<p>Drop-off Date & Time : ' . $request->car_drop_date . '</p><br>';
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
	public function holidayPackage(Request $request){
        $content = '<h3>Holiday Package Booking</h3><br>';
		$content .= '<p>Name : ' . $request->name . '</p>';
		$content .= '<p>Email : ' . $request->email . '</p>';
        $content .= '<p>Mobile No. : ' . $request->mobile . '</p>';
        $content .= '<p>No. of Travelers : ' . $request->travelers . '</p>';
		$content .= '<p>Adults : ' . $request->adults . '</p>';
		$content .= '<p>Child : ' . $request->child . '</p>';
		$content .= '<p>Days : ' . $request->days . '</p>';
		$content .= '<p>Travel Date : ' . $request->travel_date . '</p>';
		$content .= '<p>Budget : ' . $request->budget . '</p>';
		$content .= '<p>Destination : ' . $request->destination . '</p>';
		$content .= '<p>Message : ' . $request->message . '</p>';
		$content .= '<p>Thank You</p><br>';
		$subject = "New Holiday Package Booking";

		$to = "operations@fareorbitz.com";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <operations@fareorbitz.com>' . "\r\n";
		mail($to, $subject, $content, $headers);
        $data = [
            'enq_type' => 'holiday package'
        ];
        return view('site.thank-you', compact('data'));
    }
	public function enquiry(Request $request){
        $content = '<h3>New Enquiry</h3><br>';
		$content .= '<p>Name : ' . $request->name . '</p>';
		$content .= '<p>Email : ' . $request->email . '</p>';
		$content .= '<p>Message : ' . $request->message . '</p>';
		$content .= '<p>Thank You</p><br>';
		$subject = "New Enquiry";

		$to = "operations@fareorbitz.com";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <operations@fareorbitz.com>' . "\r\n";
		mail($to, $subject, $content, $headers);
        $data = [
            'enq_type' => 'new enquiry'
        ];
        return view('site.thank-you', compact('data'));
    }
	public function hotels(){
		return view('site.hotels');
	}
	public function visa(){
		return view('site.visa');
	}
}
