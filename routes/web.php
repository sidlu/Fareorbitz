<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Flight;
use App\Models\Crud_Model;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

//site start
Route::middleware('throttle:60,1')->group(function () {
Route::get('/', function () {
    return view('site/index');
});
Route::get('/about-us', function () {
    return view('site.about-us');
});
Route::get('/contact-us', function () {
    return view('site.contact-us');
});
Route::get('/holiday-packages', function () {
    return view('site.holiday-packages');
});
Route::get('/getLocationsFlights', function () {
    $t = $_REQUEST['term'];
    $data = DB::select("select * from airports where LCASE(city_name) LIKE '" . strtolower($t) . "%'  OR code LIKE '" . strtolower($t) . "%' limit 5 ");
    return json_encode($data);
});
Route::get('/flight-search-results', function () {
    return view('flight/flight-search-results');
});

Route::get('/create-token', [Flight::class, 'CreateToken']);
Route::get('/flight-search-results2', [Flight::class, 'SearchRequest']);
Route::get('/Show_Flights', [Flight::class, 'Show_Flights']);
Route::get('/flight-controller', [Flight::class, 'FlightController']);

Route::get('/flight-booking/{id}', function ($id) {
    $id = base64_decode($id);
    $countriesData = crud_model::read('countries');
    $flightData = crud_model::readOne('amedeus_flight_results', array('id' => $id));
    return view('flight/flight-booking-form', array('flightData' => $flightData, 'countriesData' => $countriesData));
});

Route::get('/book-flight', [Flight::class, 'BookFlight']);
Route::get('/GetLocation', [Flight::class, 'GetLocation']);
Route::get('/flight-confirmation/{order_id}', function ($order_id) {
    $order_id = base64_decode($order_id);
    $flightData = crud_model::readOne('bookings', array('order_id' => $order_id));
    return view('flight/flight-confirmation', array('flightData' => $flightData));
});
Route::get('/flight-booking-confirmation', function () {
    return view('flight.flight-booking-confirmation');
});
Route::get('/emailtemplate', function () {
    return view('site.emailtemplate');
});
Route::get('/showdata', function () {
    $flightData = crud_model::read('akmt');
    echo "<pre>";
    print_r($flightData);
});


Route::get('/select-flight', [Flight::class, 'SelectFlight']);
Route::post('/flight-final-checkout', [Flight::class, 'FlightFinalCheckout']);

// flights
Route::get('/london/flights', function () {
    return view('static.london');
});
Route::get('/paris/flights', function () {
    return view('static.paris');
});
Route::get('/amsterdam/flights', function () {
    return view('static.amsterdam');
});
Route::get('/athens/flights', function () {
    return view('static.athens');
});
Route::get('/rome/flights', function () {
    return view('static.rome');
});
Route::get('/barcelona/flights', function () {
    return view('static.barcelona');
});
Route::get('/madrid/flights', function () {
    return view('static.madrid');
});
Route::get('/dublin/flights', function () {
    return view('static.dublin');
});
Route::get('/prague/flights', function () {
    return view('static.prague');
});
Route::get('/lisbon/flights', function () {
    return view('static.lisbon');
});

//domastic
Route::get('/boston/flights', function () {
    return view('static.domastic.boston');
});
Route::get('/hoston/flights', function () {
    return view('static.domastic.hoston');
});
Route::get('/las-vegas/flights', function () {
    return view('static.domastic.las-vegas');
});
Route::get('/los-angeles/flights', function () {
    return view('static.domastic.los-angeles');
});
Route::get('/miami/flights', function () {
    return view('static.domastic.miami');
});
Route::get('/new-york/flights', function () {
    return view('static.domastic.new-york');
});
Route::get('/orlando/flights', function () {
    return view('static.domastic.orlando');
});
Route::get('/philadelphia/flights', function () {
    return view('static.domastic.philadelphia');
});
Route::get('/phoenix/flights', function () {
    return view('static.domastic.phoenix');
});
Route::get('/san-diego/flights', function () {
    return view('static.domastic.san-diego');
});
Route::get('/san-francisco/flights', function () {
    return view('static.domastic.san-francisco');
});
Route::get('/washington/flights', function () {
    return view('static.domastic.washington');
});

Route::get('/dallas-fort-worth/flights', function () {
    return view('static.domastic.dallas-fort-worth');
});
Route::get('/san-antonio/flights', function () {
    return view('static.domastic.san-antonio');
});
Route::get('/chicago/flights', function () {
    return view('static.domastic.chicago');
});

//airlines
Route::get('/united-airlines', function () {
    return view('static.airlines.united-airlines');
});
Route::get('/american-airlines', function () {
    return view('static.airlines.american-airlines');
});
Route::get('/alaska-airlines', function () {
    return view('static.airlines.alaska-airlines');
});
Route::get('/jetblue-airways', function () {
    return view('static.airlines.jetblue-airways');
});
Route::get('/southwest-airlines', function () {
    return view('static.airlines.southwest-airlines');
});
Route::get('/turkish-airlines', function () {
    return view('static.airlines.international.turkish-airlines');
});
Route::get('/delta-airlines', function () {
    return view('static.airlines.delta-airlines');
});
Route::get('/caribbean-airlines', function () {
    return view('static.airlines.caribbean-airlines');
});
Route::get('/spirit-airlines', function () {
    return view('static.airlines.spirit-airlines');
});
Route::get('/frontier-airlines', function () {
    return view('static.airlines.frontier-airlines');
});
Route::get('/hawaiian-airlines', function () {
    return view('static.airlines.hawaiian-airlines');
});
Route::get('/swiss-international-airlines', function () {
    return view('static.airlines.international.swiss-international-airlines');
});
Route::get('/air-canada', function () {
    return view('static.airlines.international.air-canada');
});
Route::get('/qatar-airways', function () {
    return view('static.airlines.international.qatar-airways');
});
Route::get('/thai-airways', function () {
    return view('static.airlines.international.thai-airways');
});
Route::get('/qantas-airways', function () {
    return view('static.airlines.international.qantas-airways');
});
Route::get('/kuwait-airways', function () {
    return view('static.airlines.international.kuwait-airways');
});
Route::get('/klm', function () {
    return view('static.airlines.international.klm');
});
Route::get('/singapore-airlines', function () {
    return view('static.airlines.international.singapore-airlines');
});
Route::get('/air-newzeland', function () {
    return view('static.airlines.international.air-newzeland');
});
Route::get('/virgin-atlantic', function () {
    return view('static.airlines.international.virgin-atlantic');
});
Route::get('/air-india', function () {
    return view('static.airlines.international.air-india');
});
Route::get('/west-jet', function () {
    return view('static.airlines.international.west-jet');
});
Route::get('/air-france', function () {
    return view('static.airlines.international.air-france');
});
Route::get('/british-airways', function () {
    return view('static.airlines.international.british-ariways');
});
Route::get('/austrian-airlines', function () {
    return view('static.airlines.international.austrian-airlines');
});
Route::get('/saudia', function () {
    return view('static.airlines.international.saudia');
});
Route::get('/brussels-airlines', function () {
    return view('static.airlines.international.brussels-airlines');
});
Route::get('/tap-air-portugal', function () {
    return view('static.airlines.international.tap-air-portugal');
});
Route::get('/emirates', function () {
    return view('static.airlines.international.emirates');
});
Route::get('/etihad-airways', function () {
    return view('static.airlines.international.etihad-airways');
});
Route::get('/lufthansa', function () {
    return view('static.airlines.international.lufthansa');
});
Route::get('/latam-airlines', function () {
    return view('static.airlines.international.latam-airlines');
});
Route::get('/korean-air', function () {
    return view('static.airlines.international.korean-air');
});
Route::get('/avianca-airlines', function () {
    return view('static.airlines.international.avianca-airlines');
});

Route::post('/vacation-booking', [HomeController::class, 'vacationBooking'])->name('vacation.booking');
Route::post('/hotel-booking', [HomeController::class, 'hotelBooking'])->name('hotel.booking');
Route::post('/car-booking', [HomeController::class, 'carBooking'])->name('car.booking');
Route::post('/visa-booking', [HomeController::class, 'visaBooking'])->name('visa.booking');
Route::post('/holiday-package-booking', [HomeController::class, 'holidayPackage'])->name('holiday.package.booking');
Route::post('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry');
Route::get('/hotels', [HomeController::class, 'hotels'])->name('hotels');
Route::get('/visa', [HomeController::class, 'visa'])->name('visa');

Route::get('/terms-and-conditions', function () {
    return view('site.terms-of-use');
});
Route::get('/terms', function () {
    return view('site.terms');
});
Route::get('/refund-and-cancellation', function () {
    return view('site.refund-cancellation');
});
Route::get('/privacy-policy', function () {
    return view('site.privacy-policy');
});

/// CALL 
Route::group(['prefix' => '/southwest-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = 'Southwest Airlines';
        $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = 'Southwest Airlines';
        $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = 'Southwest Airlines';
        $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = 'Southwest Airlines';
        $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/jetblue-airways'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Jetblue Airways";
          $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Jetblue Airways";
          $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Jetblue Airways";
          $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Jetblue Airways";
          $contact = '+1-888-918-3650';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/delta-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Delta Airlines";
        $contact = '+1-888-473-1644';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Delta Airlines";
         $contact = '+1-888-473-1644';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Delta Airlines";
         $contact = '+1-888-473-1644';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Delta Airlines";
         $contact = '+1-888-473-1644';
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/united-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "United Airlines";
        $contact = "+1-888-473-1644";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "United Airlines";
        $contact = "+1-888-473-1644";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "United Airlines";
        $contact = "+1-888-473-1644";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "United Airlines";
        $contact = "+1-888-473-1644";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/alaska-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Alaska Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Alaska Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Alaska Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Alaska Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/hawaiian-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Hawaiian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Hawaiian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Hawaiian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Hawaiian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/qatar-airways'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Qatar Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Qatar Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Qatar Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Qatar Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/british-airways'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "British Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "British Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "British Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "British Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/american-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "American Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "American Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "American Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "American Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/turkish-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Turkish Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Turkish Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Turkish Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Turkish Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/caribbean-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Caribbean Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Caribbean Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Caribbean Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Caribbean Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/spirit-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Spirit Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Spirit Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Spirit Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Spirit Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/frontier-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Frontier Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Frontier Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Frontier Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Frontier Airlines";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/swiss-international'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Swiss International";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Swiss International";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Swiss International";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Swiss International";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/air-canada'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Air Canada";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Air Canada";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Air Canada";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Air Canada";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/thai-airways'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Thai Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Thai Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Thai Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Thai Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/qantas-airways'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Qantas Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Qantas Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Qantas Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Qantas Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/kuwait-airways'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Kuwait Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Kuwait Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Kuwait Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Kuwait Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/KLM'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "KLM";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "KLM";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "KLM";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "KLM";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/singapore-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Singapore Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Singapore Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Singapore Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Singapore Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/air-newzeland'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Air Newzeland";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Air Newzeland";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Air Newzeland";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Air Newzeland";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/virgin-atlantic'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Virgin Atlantic";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Virgin Atlantic";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Virgin Atlantic";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Virgin Atlantic";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/air-india'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Air India";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Air India";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Air India";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Air India";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/west-jet'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "West Jet";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "West Jet";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "West Jet";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "West Jet";
        $contact = "+1-888-918-3650";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/air-france'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Air France";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Air France";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Air France";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Air France";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/austrian-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Austrian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Austrian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Austrian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Austrian Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/saudia'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Saudia";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Saudia";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Saudia";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Saudia";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/brussels-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Brussels Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Brussels Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Brussels Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Brussels Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/tap-air-portugal'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "TAP Air Portugal";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "TAP Air Portugal";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "TAP Air Portugal";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "TAP Air Portugal";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/emirates'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Emirates";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Emirates";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Emirates";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Emirates";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/etihad-airways'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Etihad Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Etihad Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Etihad Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Etihad Airways";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/lufthansa'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Lufthansa";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Lufthansa";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Lufthansa";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Lufthansa";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/latam-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Latam Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Latam Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Latam Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Latam Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/korean-air'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Korean Air";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Korean Air";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Korean Air";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Korean Air";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});

Route::group(['prefix' => '/avianca-airlines'], function () {
    Route::get('/customer-support-on-call', function () {
        $airline = "Aviance Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/book-ticket-on-call', function () {
        $airline = "Aviance Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/upgrade-ticket-on-call', function () {
        $airline = "Aviance Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
    Route::get('/cancel-ticket-on-call', function () {
        $airline = "Aviance Airlines";
        $contact = "+1-888-926-8555";
        return view('site.customer-support-on-call', compact('airline', 'contact'));
    });
});
});