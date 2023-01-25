<?php
if (isset($_REQUEST['IATA_from'])) {
    $IATA_from = $_REQUEST['IATA_from'];
} else {
    $IATA_from = 'JFK';
}
if (isset($_REQUEST['IATA_to'])) {
    $IATA_to = $_REQUEST['IATA_to'];
} else {
    $IATA_to = 'LAX';
}
if (isset($_REQUEST['origin'])) {
    $origin = $_REQUEST['origin'];
} else {
    $origin = 'New York, US';
}
if (isset($_REQUEST['destination'])) {
    $destination = $_REQUEST['destination'];
} else {
    $destination = 'Los Angeles, US';
}
if (isset($_REQUEST['departure_date'])) {
    $departure_date = $_REQUEST['departure_date'];
} else {
    // $departure_date = date('d/m/Y ', strtotime(date('m/d/Y') . ' +6 month'));
    $departure_date = "";
}
if (isset($_REQUEST['return_date'])) {
    $return_date = $_REQUEST['return_date'];
} else {
    // $return_date = date('d/m/Y ', strtotime(date('m/d/Y') . ' +7 month'));;
    $return_date = "";
}

if (isset($_REQUEST['adults'])) {
    $adults = $_REQUEST['adults'];
} else {
    $adults = 1;
}
if (isset($_REQUEST['childs'])) {
    $childs = $_REQUEST['childs'];
} else {
    $childs = 0;
}
if (isset($_REQUEST['infants'])) {
    $infants = $_REQUEST['infants'];
} else {
    $infants = 0;
}
if (isset($_REQUEST['flighttype'])) {
    $flighttype = $_REQUEST['flighttype'];
} else {
    $flighttype = 'oneway';
}
if (isset($_REQUEST['cabin_class'])) {
    $cabin_class = $_REQUEST['cabin_class'];
} else {
    $cabin_class = 'economy';
}
if (isset($_REQUEST['direct'])) {
    $direct = $_REQUEST['direct'];
} else {
    $direct = '';
}
if (isset($page)) {
    $airline = $page;
} else {
    $airline = '';
}
if (isset($logo)) {
    $logo = $logo;
} else {
    $logo = '';
}
?>
<section class="hero-wrapper">
    <div class="row">
        <div class="col-lg-12 mx-auto responsive--column-l">
            <div class="section-tab fade-in glass">
                <div class="container-fluid">
                    <ul class="nav nav-tabs listitems px-md-4" id="Tab" role="tablist">
                        <li data-position="1" class="nav-item active" role="presentation">
                            <button class="nav-link active px-0" id="flights-tab" data-bs-toggle="tab" data-bs-target="#flights" type="button" role="tab" aria-controls="flights" aria-selected="false">
                                <span><i class="la la-plane "></i> flights</span>
                            </button>
                        </li>
                        <li data-position="2" class="nav-item" role="presentation">
                            <button class="nav-link px-0" id="vacations-tab" data-bs-toggle="tab" data-bs-target="#vacations" type="button" role="tab" aria-controls="flights" aria-selected="false">
                                <span><i class="la la-map-marker "></i> Vacations</span>
                            </button>
                        </li>
                        <li data-position="3" class="nav-item" role="presentation">
                            <button class="nav-link px-0" id="hotels-tab" data-bs-toggle="tab" data-bs-target="#hotels" type="button" role="tab" aria-controls="flights" aria-selected="false">
                                <span><i class="la la-hotel "></i> Hotels</span>
                            </button>
                        </li>
                        <!-- <li data-position="4" class="nav-item" role="presentation">
                            <button class="nav-link px-0" id="car-tab" data-bs-toggle="tab" data-bs-target="#car" type="button" role="tab" aria-controls="flights" aria-selected="false">
                                <span><i class="la la-car "></i> Car</span>
                            </button>
                        </li> -->
                        <li data-position="5" class="nav-item d-xs-none" role="presentation">
                            <button class="nav-link px-0" id="visa-tab" data-bs-toggle="tab" data-bs-target="#visa" type="button" role="tab" aria-controls="flights" aria-selected="false">
                                <span>Visa</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="primary-bg pt-4 pb-3">
                    <div class="container-fluid">
                        <div class="tab-content search-fields-container search_area search_tabs px-md-4" id="TabContent">
                            <div class="tab-pane show fade active" id="flights" role="flights" aria-labelledby="flights-tab">
                                <form autocomplete="off" class="main_search" action="{{ asset('flight-search-results') }}">
                                    <div class="row mb-2 g-1">
                                        <div class="col-md-4 flight_types">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input <?php if ($flighttype == 'oneway' || $flighttype == '') {
                                                                    echo "checked='checked'";
                                                                } ?> class="form-check-input onewayradio" type="radio" name="flighttype" id="oneway" value="oneway" checked>
                                                        <label class="form-check-label" for="one-way">
                                                            One Way
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input <?php if ($flighttype == 'round') {
                                                                    echo "checked='checked'";
                                                                }; ?> class="form-check-input retirnradio" type="radio" name="flighttype" id="round" value="return">
                                                        <label class="form-check-label" for="round-trip">
                                                            Round Trip
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="" id="flight_type" class="form-select form-select-sm">
                                                <option <?php if ($cabin_class == 'economy') {
                                                            echo "selected";
                                                        } ?> value="economy">
                                                    Economy
                                                </option>
                                                <option <?php if ($cabin_class == 'business') {
                                                            echo "selected";
                                                        } ?> value="business">
                                                    Business
                                                </option>
                                                <option <?php if ($cabin_class == 'first') {
                                                            echo "selected";
                                                        } ?> value="first">
                                                    First
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row contact-form-action" id="onereturn">
                                        <div class="col-md-6">
                                            <div class="row g-1">
                                                <div class="col-md-6 position-relative">
                                                    <div class="input-box input-items mx-2">
                                                        <div class="form-group">
                                                            <span class="la la-plane-departure form-icon"></span>
                                                            <input type="hidden" class="form-control autosuggestion" id="IATA_from" name="IATA_from" value="<?php echo $IATA_from;  ?>">
                                                            <input type="search" class="form-control autosuggestion an-from" placeholder="Flying From" fly="from" name="origin" id="autosuggestion_from" value="<?php echo $origin; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="input-box from_list" style="display:none"></div>
                                                </div>
                                                <div class="col-md-6 position-relative">
                                                    <div class="input-box input-items mx-2">
                                                        <div class="form-group">
                                                            <span class="la la-plane-arrival form-icon"></span>
                                                            <input type="hidden" class="form-control autosuggestion" id="IATA_to" name="IATA_to" value="<?php echo $IATA_to; ?>">
                                                            <input type="search" class="form-control autosuggestion an-to" id="autosuggestion_to" fly="to" name="destination" placeholder="Flying From" value="<?php echo $destination;  ?>" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="input-box to_list" style="display:none"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="input-box mx-2">
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="depart form-control" id="departure" type="text" name="departure_date" placeholder="Departure Date" value="<?php echo $departure_date; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col round_trip" id="round_trip" <?php if ($flighttype == 'oneway' || $flighttype == '') {
                                                                                                echo 'style="display:none"';
                                                                                            } ?>>
                                                    <div class="input-box mx-2">
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="returning form-control dateright border-top-l0" id="return" type="text" placeholder="Return Date" name="return_date" value="<?php echo $return_date; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 pr-0">
                                            <div class="input-box mx-2">
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="la la-user form-icon"></i>
                                                            <span><span class="guest_flights d-block text-center">0</span></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>
                                                                        <i class="la la-user"></i> Adults
                                                                    </label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="adults" id="fadults" value="1" class="qtyInput_flights">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>
                                                                        <i class="la la-female"></i> Childs
                                                                    </label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="childs" id="fchilds" value="0" class="qtyInput_flights">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>
                                                                        <i class="la la-female"></i> Infants
                                                                    </label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="infants" id="finfant" value="0" class="qtyInput_flights">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>
                                                                        <i class="la la-female"></i> Infants on Seat
                                                                    </label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="infants2" id="finfant" value="0" class="qtyInput_flights">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-search text-center">
                                                <button type="submit" id="flights-search" class="effect ladda-button waves-effect btn text-dark" data-style="zoom-in"><i class="la la-search"></i> Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="language" id="language" value="en">
                                    <input type="hidden" name="airline" value="{{ $airline }}" />
                                    <input type="hidden" name="logo" value="{{ $logo }}" />
                                </form>
                            </div>
                            <div class="tab-pane fade" id="vacations" role="vacations" aria-labelledby="vacations-tab">
                                <form class="main_search" action="{{ route('vacation.booking') }}" method="POST">
                                    @csrf
                                    <div class="row contact-form-action">
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Passenger Name" name="vaca_name" id="vaca_name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-phone form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Phone" name="vaca_phone" id="vaca_phone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-envelope form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Email" name="vaca_email" id="vaca_email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="depart form-control" id="vaca_date" type="text" name="vaca_date" required placeholder="Travel Date" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Destination" name="vaca_destination" id="vaca_destination" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-search text-center">
                                                <button type="submit" id="vacation-search" class="ladda-button btn"><i class="la la-envelope"></i> Contact </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="hotels" role="hotels" aria-labelledby="hotels-tab">
                                <form class="main_search" action="{{ route('hotel.booking') }}" method="POST">
                                    @csrf
                                    <div class="row contact-form-action">
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Name" required name="hotels_name" id="hotels_name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-envelope form-icon"></span>
                                                    <input type="email" class="form-control an-from" placeholder="Email" required name="hotels_email" id="hotels_email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-phone form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Phone" required name="hotels_phone" id="hotels_phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-plane-departure form-icon"></span>
                                                    <input type="search" class="form-control an-from" placeholder="City" required name="hotels_city" id="hotels_city" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="depart form-control" id="checkin" type="text" name="check_in" required placeholder="Check-in" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="depart form-control" id="checkout" type="text" required name="check_out" placeholder="Check-out" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mt-3 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-building form-icon"></span>
                                                    <select class="form-select form-select-lg" id="rooms" required name="rooms" placeholder="Rooms">
                                                        <option value="" disabled selected>Rooms</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box mb-2 mt-3 mx-2">
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="la la-user form-icon"></i>
                                                            <span><span class="guest_hotels d-block text-center">0</span></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>
                                                                        <i class="la la-user"></i> Adults
                                                                    </label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="hotel_adults" id="fadults2" value="1" class="qtyInput_hotels">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>
                                                                        <i class="la la-female"></i> Childs
                                                                    </label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="hotel_childs" id="fchilds2" value="0" class="qtyInput_hotels">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-search text-center mt-3">
                                                <button type="submit" id="vacation-search" class="ladda-button btn""><i class=" la la-envelope"></i> Contact </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="car" role="car" aria-labelledby="car-tab">
                                <form class="main_search" action="{{ route('car.booking') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group text-white mb-2">
                                                    <input type="checkbox" class="" name="same_as_pickup" id="same_as_pickup" value="1" /> Drop-off Location Same as Pick-up Location
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row contact-form-action" id="onereturn">
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Name" required name="car_name" id="car_name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-envelope form-icon"></span>
                                                    <input type="email" class="form-control an-from" placeholder="Email" required name="car_email" id="car_email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-phone form-icon"></span>
                                                    <input type="text" class="form-control an-from" placeholder="Phone" required name="car_phone" id="car_phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-car form-icon"></span>
                                                    <input type="search" class="form-control an-from" placeholder="Pick-up City / Airport" required name="car_from_city" id="car_from_city" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 position-relative">
                                            <div class="input-box input-items mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-car form-icon"></span>
                                                    <input type="search" class="form-control an-to" id="car_to_city" name="car_to_city" placeholder="Drop-off Location" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mt-3 mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="form-control" id="car_pickup_date" type="text" onfocus="this.type='datetime-local'" onblur="this.type='text'" name="car_pickup_date" placeholder="Pick-up date" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mt-3 mb-2 mx-2">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="form-control" id="car_drop_date" type="text" onfocus="this.type='datetime-local'" onblur="this.type='text'" name="car_drop_date" placeholder="Drop-off date" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-search mt-3 text-center">
                                                <button type="submit" id="car-search" class="ladda-button btn"><i class="la la-envelope"></i> Contact </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="visa" role="visa" aria-labelledby="visa-tab">
                                <form class="main_search" action="{{ route('visa.booking') }}" method="POST">
                                    @csrf
                                    <div class="row contact-form-action" id="onereturn">
                                        <div class="col-md-3 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-car form-icon"></span>
                                                    <input type="search" class="form-control an-from" placeholder="Travelling From" name="travel_from_city" id="travel_from_city" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-car form-icon"></span>
                                                    <input type="search" class="form-control an-to" id="travel_to_city" name="travel_to_city" placeholder="Travelling To" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-cc-visa form-icon"></span>
                                                    <input class="form-control" id="visa_purpose" type="text" name="visa_purpose" placeholder="Visa Purpose" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <div class="input-box input-items mx-2">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="depart form-control" id="travel_date" type="text" name="travel_date" placeholder="Date of Travel" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-search text-center">
                                                <button type="submit" id="car-search" class="btn" data-style="zoom-in"><i class="la la-envelope"></i> Contact </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>