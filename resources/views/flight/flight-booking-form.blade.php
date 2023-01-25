@include('site.header')
@php $DOB=date('Y/m/d ', strtotime(date('m/d/Y').' -19 year')); @endphp
<section class="booking-area padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h4 class="primary-font primary-color">Traveler Information</h4>
                    </div>
                    <div class="form-content">
                        <div class="contact-form-action-2">
                            <form method="post" action="{{ asset('flight-final-checkout') }}">
                                @csrf
                                <input class="form-control" type="hidden" name="OfferId" id="OfferId" value="">
                                <input class="form-control" type="hidden" name="search_id" id="search_id" value="<?php echo $flightData->search_id; ?>">
                                <input class="form-control" type="hidden" name="ref_id" id="ref_id" value="<?php echo $flightData->id; ?>">
                                <input class="form-control" type="hidden" name="agent_id" id="agent_id">
                                <input class="form-control" type="hidden" name="user_id" id="user_id" value="">
                                <input class="form-control" type="hidden" name="currency" id="currency_main">
                                <input class="form-control" type="hidden" name="api_currency" id="api_currency">
                                <input class="form-control" type="hidden" name="from_iatacode" id="from_iatacode" value="<?php echo $flightData->origon_airport; ?>">
                                <input class="form-control" type="hidden" name="to_iatacode" id="to_iatacode" value="<?php echo $flightData->destination_airport; ?>">
                                <input class="form-control" type="hidden" name="from_city" id="from_city" value="<?php echo $flightData->cityFrom; ?>">
                                <input class="form-control" type="hidden" name="to_city" id="to_city" value="<?php echo $flightData->cityTo; ?>">
                                <input class="form-control" type="hidden" name="apiPrice" id="apiPrice">
                                <input class="form-control" type="hidden" name="adults" id="adults" value="<?php echo $flightData->adults; ?>">
                                <input class="form-control" type="hidden" name="children" id="children" value="<?php echo $flightData->children; ?>">
                                <input class="form-control" type="hidden" name="infants" id="infants" value="<?php echo $flightData->infants; ?>">
                                <input class="form-control" type="hidden" name="infants" id="infants" value="<?php echo $flightData->infants2; ?>">
                                <input class="form-control" type="hidden" name="chargeableRate" id="chargeableRate">
                                <input class="form-control" type="hidden" name="base_fare" id="base_fare">
                                <input class="form-control" type="hidden" name="tax" id="tax">
                                <div class="row">
                                    <?php for ($a = 0; $a < $flightData->adults; $a++) { ?>
                                        <div class="col-lg-12 mb-3">
                                            <h3 class="title">Adult <?php echo $a + 1; ?></h3>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select form-select" name="passenger[adult][title][]">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="passenger[adult][first_name][]" placeholder="First name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="passenger[adult][last_name][]" placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="form-control depart" type="text" name="passenger[adult][dob][]" placeholder="Date of Birth">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <input class="form-control" type="text" name="passenger[adult][passport_number][]" placeholder="Passport No">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="form-control depart" type="text" name="passenger[adult][passport_expiry][]" placeholder="Passport Expiry Date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php for ($a = 0; $a < $flightData->children; $a++) { ?>
                                        <div class="form-title-wrap col-lg-12 mb-3">
                                            <h3 class="title">Children <?php echo $a + 1; ?></h3>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select form-select" name="passenger[child][title][]">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="passenger[child][first_name][]" placeholder="First name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="passenger[child][last_name][]" placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="form-control depart" type="text"  name="passenger[child][dob][]" placeholder=""/> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <input class="form-control" type="text" name="passenger[child][id][]" placeholder="Enter ID">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">                                                
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <input class="form-control depart" type="text" name="passenger[child][passport_expiry][]" placeholder="Passport Expiry Date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                    <?php for ($a = 0; $a < $flightData->infants; $a++) { ?>
                                        <div class="form-title-wrap col-lg-12 mb-3">
                                            <h3 class="title">Infants <?php echo $a + 1; ?></h3>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select form-select" name="passenger[infant][title][]">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="passenger[infant][first_name][]" placeholder="First name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="passenger[infant][last_name][]" placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="form-control depart" type="text" name="passenger[infant][dob][]" placeholder="Date Of Birth">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="input-box mb-3">
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <input class="form-control" type="text" name="passenger[infant][id][]" placeholder="Enter ID">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-box mb-3">
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <input class="form-control depart" type="text" name="passenger[infant][passport_expiry][]" placeholder="Passport Expiry Date">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            <?php } ?>
                            <div class="col-md-5">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-envelope-o form-icon"></span>
                                        <input class="form-control" type="email" name="passenger[email]" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <div class="select-contain w-auto">
                                            <select class="select-contain-select form-select" name="passenger[ext_phone]">
                                                <option value="">Country Code</option>
                                                @foreach($countriesData as $cd)
                                                <option value="{{$cd->phone_code}}">{{$cd->phone_code}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-phone form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[phone]" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-map-marked form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[address]" placeholder="Address line">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-map-marked form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[city]" placeholder="City">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-map-marked form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[postalCode]" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <div class="select-contain w-auto">
                                            <select class="select-contain-select form-select" name="passenger[country]">
                                                <option value="">Select country</option>
                                                @foreach($countriesData as $cd)
                                                <option value="{{$cd->iso}}">{{$cd->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-title-wrap">
                                    <h4 class="primary-font primary-color">Payment Information</h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-credit-card form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[card_holder_name]" placeholder="Card Holder Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-credit-card form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[card_number]" placeholder="Card Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-credit-card form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[card_expiry_month]" placeholder="Card Expiry Month">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-credit-card form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[card_expiry_year]" placeholder="Card Expiry Year">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mb-3">
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <input class="form-control" type="text" name="passenger[card_cvv]" placeholder="Card CVV">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group py-3">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="receiveChb">
                                        <label for="receiveChb">I Accept <a target="_blank" href="{{ url('/terms')}}">Terms & Condition</a></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="theme-btn btn-block w-100" id="show_button" onClick="checkTerm()" type="button">Confirm Booking</button>
                        <button style="display:none" class="theme-btn" id="submit_btn" type="submit">Confirm Booking</button>
                        <button style="background:#FF0000;display:none" id="NotAvalible" type="button">Flight No Longer Avalible Please Select Other Flight.</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-box booking-detail-form">
                <div class="form-title-wrap">
                    <h4 class="primary-font primary-color">Booking Details</h4>
                </div>
                <div class="form-content">
                    <div class="card-item shadow-none radius-none mb-0">
                        <div class="card-img pb-4">
                            <a href="#" class="d-block">
                                <img src="https://res.cloudinary.com/wego/image/upload/c_fit,w_100,h_100/v20190802/flights/airlines_square/<?php echo $flightData->validating_carrier; ?>" alt="plane-img">
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="card-title font-size-24 font-weight-bold color-blue primary-font mb-0"><?php echo $flightData->cityFrom; ?> to <?php echo $flightData->cityTo; ?></h3>
                                    <p class="card-meta"><?php if ($flightData->is_return == 0) {
                                                                echo "One way Flight";
                                                            } else {
                                                                echo "Return Flight";
                                                            } ?></p>

                                </div>
                            </div>
                            <!--<div class="card-rating">
                                    <span class="badge text-white">4.4/5</span>
                                    <span class="review__text">Average</span>
                                    <span class="rating__text">(30 Reviews)</span>
                                </div>-->
                            <table class="table table-striped">
                                <tr>
                                    <td>
                                        <i class="la la-plane mr-1 primary-text font-size-17 take-off"></i> Departure
                                    </td>
                                    <td class="text-end">
                                        <span class="la la-calendar primary-text"></span><?php echo date('d M  Y  h:i:s', $flightData->departure_datetime); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td class="text-end"><i class="la la-clock-o mr-1 primary-text font-size-17"></i><?php echo floor($flightData->departure_duration / 3600) . ' Hours ' . floor(($flightData->departure_duration / 60) % 60) . ' Minutes' ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="la la-plane mr-1 primary-text font-size-17 landing"></i> Arrival
                                    </td>
                                    <td class="text-end"><span class="la la-calendar primary-text"></span><?php echo date('d M  Y  h:i:s', $flightData->arrival_datetime); ?></td>
                                </tr>
                            </table>
                            <?php $onewayFlights = json_decode($flightData->onewayFlights, true); ?>
                            <h5 class="pb-3 primary-font primary-color">Order Details</h5>

                            <table class="table table-striped">
                                <tr>
                                    <td>Airline</td>
                                    <td class="text-end"><?php echo $onewayFlights[0]['airlineName'];  ?></td>
                                </tr>
                                <tr>
                                    <td>Passengers</td>
                                    <td class="text-end"></td>
                                </tr>
                                <tr>
                                    <td>Adult</td>
                                    <td class="text-end"><?php echo $flightData->adults; ?></td>
                                </tr>
                                <tr>
                                    <td>Children</td>
                                    <td class="text-end"><?php echo $flightData->children; ?></td>
                                </tr>
                                <tr>
                                    <td>Infant</td>
                                    <td class="text-end"><?php echo $flightData->infants; ?></td>
                                </tr>
                                <tr>
                                    <td>Infant On Seat</td>
                                    <td class="text-end"><?php echo $flightData->infants2; ?></td>
                                </tr>
                            </table>
                            <table class="table">
                                <tr>
                                    <th><span class="primary-font">Total Price:</span></th>
                                    <th class="text-end">USD <?php echo $flightData->price; ?></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
    function checkTerm() {
        var val = $("#receiveChb").prop("checked");
        if (val == true) {
            $("#submit_btn").trigger("click");
        } else {
            alert('Please Accept Terms and Condition.');
        }

    }


    var innerHtml = '';
    var page = 0;
    var search_session = '';

    jQuery(document).ready(function() {

        // var innerHtml='<div class="loader"><svg class="spinner" viewBox="0 0 50 50"><circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle></svg></div>';   jQuery('.flight_ist').html(innerHtml);	
        $.ajax({
            url: '<?php url(''); ?>/select-flight',
            type: "GET",
            data: {
                action: "select_flight",
                tid: "<?php echo $flightData->id; ?>",
                rand: "<?php echo rand(); ?>",
            },
            dataType: "json",
            success: function(data) {
                if (typeof data.errors === 'object') {
                    alert('Flight No Longer Avalible. Please Select Other Flight.');
                    $("#show_button").hide();
                    $("#NotAvalible").show();
                } else if (typeof data.data === 'object') {
                    document.getElementById('api_currency').value = data.data.total_currency;
                    document.getElementById('currency_main').value = data.data.currency;
                    document.getElementById('chargeableRate').value = data.data.total_amount;
                    document.getElementById('apiPrice').value = data.data.apiPrice;
                    document.getElementById('base_fare').value = data.data.base_amount;
                    document.getElementById('tax').value = data.data.tax_amount;

                    jQuery('.base_fare').html(data.data.currency_symbol + ' ' + parseFloat(data.data.base_amount).toLocaleString());
                    jQuery('.tax').html(data.data.currency_symbol + ' ' + parseFloat(data.data.tax_amount).toLocaleString());
                    jQuery('.total_amount').html(data.data.currency_symbol + ' ' + parseFloat(data.data.total_amount).toLocaleString());
                } else {
                    alert('Error Occur.');
                    $("#show_button").hide();
                    $("#NotAvalible").show();
                }
            },
            error: function(error) {
                console.log(`Error ${error}`);
            }
        });
    });
</script>
@include('site.footer')