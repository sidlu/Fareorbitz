@include('site.header')
<style>
	.countdown-bg {
		border-radius: 30px;
		width: 55%;
		margin-left: auto;
		margin-right: auto;
		padding: 8px;
		margin-top: 8px;
		font-weight: 600;
		background: var(--color-3);
	}

	.ownmodal-tollfree2 {
		font-size: 16px;
		width: 100%;
		border: none;
		position: fixed;
		bottom: 0;
		margin: 0;
		z-index: 9999;
		font-weight: 400;
		padding: 5px;
		border: 3px solid var(--color-3);
	}

	.bg-call {
		background: var(--color-1);
	}

	@media(min-width:768px) {
		.mobile {
			display: none;
		}

		.form-select {
			width: 190px;
		}
	}

	@media(max-width:768px) {
		.padding-top-100px {
			padding-top: 10px !important;
		}

		.orange-text {
			color: var(--color-3) !important;
		}

		.footer-area {
			margin-bottom: 25px;
		}

		.form-select {
			display: block;
			width: 100%;
			padding: 0.25rem 0.25rem 0.25rem 0.25rem;
			font-size: 13px;
		}
		.airline-name{
			display: none;
		}
		.blue-card{
			background: #e4f4ff;
		}
	}
</style>
<?php
if (!isset($_REQUEST['IATA_from'])) {
	$_REQUEST['IATA_from'] = $oc['IATA_from'];
}
if (!isset($_REQUEST['IATA_to'])) {
	$_REQUEST['IATA_to'] = $oc['IATA_to'];
}
if (!isset($_REQUEST['flighttype'])) {
	$_REQUEST['flighttype'] = $oc['flight_type'];
}
if (!isset($_REQUEST['departure_date'])) {
	$_REQUEST['departure_date'] = date('d/m/Y', strtotime(date('m/d/Y') . ' +' . $oc["outbound_days"] . ' day'));
}
if (!isset($_REQUEST['return_date'])) {
	$_REQUEST['return_date'] = date('d/m/Y', strtotime(date('m/d/Y') . ' +' . $oc["inbound_days"] . ' day'));
}
if (!isset($_REQUEST['adults'])) {
	$_REQUEST['adults'] = $oc['adult'];
}
if (!isset($_REQUEST['childs'])) {
	$_REQUEST['childs'] = $oc['child'];
}
if (!isset($_REQUEST['infants'])) {
	$_REQUEST['infants'] = $oc['infant'];
}
if (!isset($_REQUEST['cabin_class'])) {
	$_REQUEST['cabin_class'] = 'economy';
}
if (!isset($_REQUEST['origin'])) {
	$_REQUEST['origin'] = $oc['city_from'];
}
if (!isset($_REQUEST['destination'])) {
	$_REQUEST['destination'] = $oc['city_to'];
}
if (isset($_REQUEST['airline'])) {
	$airline = $_REQUEST['airline'];
} else {
	$airline = '';
}
if (isset($_REQUEST['logo'])) {
	$logo = $_REQUEST['logo'];
} else {
	$logo = '';
}
?>
<div class="mobile">
	<section class="bg-call margin-top-50px padding-top-40px padding-bottom-40px">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h4 class="text-white text-center"><b>Special Fares For Our Callers</b></h4>
					@if($logo)
					<img src="{{ asset($logo) }}" class="img-fluid my-3" alt="">
					@endif
					<h3 class="text-white" style="font-size: 25px;"><?php echo $airline; ?></h3>
					<h4 class="text-white text-center mb-2 mt-2">Cheapest and 30% discounted airfare</h6>
					<div class="countdown-bg d-flex align-items-center justify-content-center mt-3">
						Ends In:&nbsp;&nbsp; <div class="countdown text-center"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="section pt-4 pb-3">
		<div class="container">
			<h4 class="text-dark text-center text-uppercase"><b>Save Upto $100 On Call Only Deals</b></h4>
		</div>
	</div>
	<a href="tel:+1-888-926-8555" id="call">
		<p class="ownmodal-tollfree2 bg-call text-white py-3"><i class="la la-phone"></i>+1-888-926-8555</p>
	</a>
</div>
<section class="booking-area padding-top-100px padding-bottom-10px">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-6">
				<h4 style="color:#287dfa" class="title"><!--<span class='totalflight'></span>-->{{$_REQUEST['IATA_from']}} @if($_REQUEST['flighttype']=='oneway') &#8594 @else &#8596 @endif {{$_REQUEST['IATA_to']}}</h4>
			</div>
			<div class="col-6 text-right">
				<select class="select-contain-select form-select ms-auto" name="sort" id="sort" onchange="Show_Flights('filter')">
					<option value="price_ASC" selected="selected">Sort Your Flight</option>
					<option value="price_ASC">Price: low to high</option>
					<option value="price_DESC">Price: high to low</option>
				</select>
			</div>
		</div>
	</div>
</section>
<section class="card-area">
	<div class="container whole_content">
		<div class="row">
			<div class="col-lg-4 notMobile">
				<div class="sidebar mt-0">
					@if($_REQUEST['flighttype']=='round')
					<a href="javascript:void(0)" onclick="ShowHideFilter('outbound')" class="outbound akm theme-btn theme-btn-small ">Outbound Filter</a>
					<a href="javascript:void(0)" onclick="ShowHideFilter('return')" class="return akm theme-btn theme-btn-small theme-btn-transparent mr-1">Return Filter</a><br />
					@endif
					<div class="onewayfilter">
						<div class="sidebar-widget">
							<h3 class="title stroke-shape">Filter by Price</h3>
							<div class="sidebar-price-range">
								<div class="slider-range-wrap">
									<div class="price-slider-amount padding-bottom-20px">
										<label for="amount2" class="filter__label">Price:</label>
										<span id="price_cs"></span><input type="text" id="price" class="amounts">
									</div>
									<div id="slider-range-price" onclick="Show_Flights('filter')"></div><!-- end slider-range -->
								</div>
								<div class="btn-box pt-4">
									<button class="filter-btn theme-btn-small w-100" type="button" onclick="Show_Flights('filter')">Apply</button>
								</div>
							</div>
						</div>
						<div class="sidebar-widget">
							<h3 class="title stroke-shape">Filter by Duration</h3>
							<div class="sidebar-price-range">
								<div class="slider-range-wrap">
									<div class="price-slider-amount padding-bottom-20px">
										<label for="amount2" class="filter__label">Duration:</label>
										<input type="text" id="duration" class="amounts">
									</div>
									<div id="slider-range-duration" onclick="Show_Flights('filter')"></div><!-- end slider-range -->
								</div>
								<div class="btn-box pt-4">
									<button class="filter-btn theme-btn-small w-100" type="button" onclick="Show_Flights('filter')">Apply</button>
								</div>
							</div>
						</div>
						<div class="sidebar-widget" style="display:none">
							<h3 class="title stroke-shape">Filter by Departure Time</h3>
							<div class="sidebar-price-range">
								<div class="slider-range-wrap">
									<div class="price-slider-amount padding-bottom-20px">
										<label for="amount2" class="filter__label">Departure Time:</label>
										<input type="text" id="Departure" class="amounts">
									</div>
									<div id="slider-range-Departure" onclick="Show_Flights('filter')"></div>
								</div>
							</div>
						</div>
						<div class="sidebar-widget" style="display:none">
							<h3 class="title stroke-shape">Filter by Arrival Time</h3>
							<div class="sidebar-price-range">
								<div class="slider-range-wrap">
									<div class="price-slider-amount padding-bottom-20px">
										<label for="amount2" class="filter__label">Arrival Time:</label>
										<input type="text" id="Arrival" class="amounts">
									</div>
									<div id="slider-range-Arrival" onclick="Show_Flights('filter')"></div>
								</div>
							</div>
						</div>
						<div class="sidebar-widget">
							<h3 class="title stroke-shape">Flight Stops</h3>
							<div class="sidebar-widget-item Stops_Filter">
							</div>
						</div>
						<div class="sidebar-widget">
							<h3 class="title stroke-shape ">Filter by Airline Name</h3>
							<div class="sidebar-widget-item Airline_Name_Filter">
							</div>
						</div>
					</div>
					<div class="roundfilter" style="display:none">
						<div class="sidebar-widget">
							<h3 class="title stroke-shape">Filter by Duration</h3>
							<div class="sidebar-price-range">
								<div class="slider-range-wrap">
									<div class="price-slider-amount padding-bottom-20px">
										<label for="amount2" class="filter__label">Duration:</label>
										<input type="text" id="return-duration" class="amounts">
									</div>
									<div id="return-slider-range-duration" onclick="Show_Flights('filter')"></div><!-- end slider-range -->
								</div>
								<div class="btn-box pt-4">
									<button class="filter-btn theme-btn-small w-100" type="button" onclick="Show_Flights('filter')">Apply</button>
								</div>
							</div>
						</div>
						<div class="sidebar-widget" style="display:none">
							<h3 class="title stroke-shape">Filter by Departure Time</h3>
							<div class="sidebar-price-range">
								<div class="slider-range-wrap">
									<div class="price-slider-amount padding-bottom-20px">
										<label for="amount2" class="filter__label">Departure Time:</label>
										<input type="text" id="return_Departure" class="amounts">
									</div>
									<div id="return-slider-range-Departure" onclick="Show_Flights('filter')"></div>
								</div>
							</div>
						</div>
						<div class="sidebar-widget" style="display:none">
							<h3 class="title stroke-shape">Filter by Arrival Time</h3>
							<div class="sidebar-price-range">
								<div class="slider-range-wrap">
									<div class="price-slider-amount padding-bottom-20px">
										<label for="amount2" class="filter__label">Arrival Time:</label>
										<input type="text" id="return_Arrival" class="amounts">
									</div>
									<div id="return-slider-range-Arrival" onclick="Show_Flights('filter')"></div>
								</div>
							</div>
						</div>
						<div class="sidebar-widget">
							<h3 class="title stroke-shape">Flight Stops</h3>
							<div class="sidebar-widget-item return_Stops_Filter">
							</div>
						</div>
						<div class="sidebar-widget">
							<h3 class="title stroke-shape ">Filter by Airline Name</h3>
							<div class="sidebar-widget-item return_Airline_Name_Filter">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 flight_ist">
				<div class="loader"><i class="la la-spinner la-spin"></i>
					<p class="text-center">Please wait while we get the best flight deals for you.</p>
				</div>				
			</div>
			<div class="col-lg-4 outbound_flight_ist"></div>
			<div class="col-lg-4 inboubd_flight_ist"></div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-4"></div>
			<div class="col-lg-8">
				<div class="mt-3 d-flex align-items-center justify-content-between">
					<p class="font-size-16 pt-2">Showing 1 - <span class="showflight"></span> of <span class="totalflight"></span> Flights</p>
					<button type="button" class="theme-btn" onclick="Show_Flights('load')"><i class="la la-refresh mr-1"></i>Load More</button>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
	jQuery(".common_beard_comb").hide();
	var innerHtml = '';
	var page = 0;
	var search_session = '';
	var api_token = '';
	var search_id = '';

	jQuery(document).ready(function() {
		$.ajax({
			url: '<?php url(''); ?>/create-token',
			type: "get",
			data: {
				_token: "{{csrf_token()}}",
				action: "create-token",
			},
			dataType: "json",
			success: function(data) {
				api_token = data.token;
				search_id = data.search_id;
				search_session = data.search_id;
				flight_search();
			},
			error: function(error) {
				console.log(`Error ${error}`);
			}
		});
	});

	function flight_search() {
		$.ajax({
			url: '<?php url(''); ?>/flight-search-results2',
			type: "get",
			data: {
				_token: "{{csrf_token()}}",
				action: "findSearchKey",
				flighttype: "<?php echo $_REQUEST['flighttype']; ?>",
				origin: "<?php echo $_REQUEST['origin']; ?>",
				destination: "<?php echo $_REQUEST['destination']; ?>",
				IATA_from: "<?php echo $_REQUEST['IATA_from']; ?>",
				IATA_to: "<?php echo $_REQUEST['IATA_to']; ?>",
				departure_date: "<?php echo $_REQUEST['departure_date']; ?>",
				return_date: "<?php echo $_REQUEST['return_date']; ?>",
				adults: "<?php echo $_REQUEST['adults']; ?>",
				childs: "<?php echo $_REQUEST['childs']; ?>",
				infants: "<?php echo $_REQUEST['infants']; ?>",
				infants2: "<?php echo $_REQUEST['infants2']; ?>",
				cabin_class: "<?php echo $_REQUEST['cabin_class']; ?>",
				rand: "<?php echo rand(); ?>",
				api_token: api_token,
				search_id: search_id,
				isDomestic: "No",
			},
			dataType: "json",
			success: function(data) {
				jQuery('.searching').show();
				jQuery('.loader').hide();
				if (data == 1) {
					Show_Flights('load');
					Get_FlightController();
				} else {
					alert("No Flight Found.");
					jQuery('.not_found').show();
					jQuery('.loader').hide();
					jQuery('.whole_content').hide();
				}
			},
			error: function(error) {
				console.log(`Error ${error}`);
			}
		});
	}

	function Show_Flights(type) {
		jQuery('.flight_ist').addClass('opacity_5');
		if (type == 'filter') {
			innerHtml = '';
		} else {
			page = page + 1;
		}
		var sortVal = document.getElementById("sort").value;
		var Arrival = document.getElementById("Arrival").value;
		var Departure = document.getElementById("Departure").value;
		var price = document.getElementById("price").value;
		var duration = document.getElementById("duration").value;
		var airlines = '';
		jQuery("input[name=airlines]:checked").each(function() {
			var a = jQuery(this).val();
			airlines += a + ",";
		});

		var Stops = '';
		jQuery("input[name=Stops]:checked").each(function() {
			var s = jQuery(this).val();
			Stops += s + ",";
		});

		$.ajax({
			url: '<?php url(''); ?>/Show_Flights',
			type: "GET",
			data: {
				_token: "{{csrf_token()}}",
				action: "Show_Flights",
				search_id: search_session,
				sortVal: sortVal,
				Arrival: Arrival,
				Departure: Departure,
				duration: duration,
				price: price,
				Stops: Stops,
				airlines: airlines,
				rand: "<?php echo rand(); ?>",
			},
			dataType: "json",
			success: function(data) {

				jQuery('.loader').hide();
				jQuery('.flight_ist').removeClass('opacity_5');
				jQuery('.totalflight').html(data.result[0].totalcountfilter);
				jQuery('.showflight').html(page * 20);
				for (var i = 0; i < data.result.length; i++) {

					if (data.result[i].max_stops == 0) {
						var onewaystop = 'Non';
					} else {
						onewaystop = data.result[i].max_stops;
					}
					if (data.result[i].return_max_stops == 0) {
						var returnstop = 'Non';
					} else {
						returnstop = data.result[i].return_max_stops;
					}
					if (data.result[i].isReturn == 'Yes') {
						var arraow = '&#8596';
					} else {
						var arraow = '&#8594';
					}
					$price = parseFloat(data.result[i].price);
					// innerHtml += '<div class="card-item flight-card flight--card card-item-list card-item-list-2"><div class="card-img"><div class="an-container"><img src="https://res.cloudinary.com/wego/image/upload/c_fit,w_100,h_100/v20190802/flights/airlines_square/' + data.result[i].validating_carrier + '" alt="flight-logo-img">  <br> <span>' + data.result[i].onewayFlights[0].airlineName + '<br> ' + data.result[i].onewayFlights[0].airline + '-' + data.result[i].onewayFlights[0].flight_no + '</span></div></div><div class="card-body"><div class="card-top-title d-flex justify-content-between"><div style="color:#287dfa"><h3 class="card-title font-size-17">' + data.result[i].origon_airport + ' ' + arraow + ' ' + data.result[i].destination_airport + '</h3></div><div><div class="text-right" style="color:#287dfa"><h6 class="font-weight-bold color-text">USD' + $price.toLocaleString() + '</h6></div></div></div><div style="text-align: center;" class="flight-details py-3"><div class="flight-time pb-3"><p class="card-meta font-size-14">One way flight</p><div class="flight-time-item  d-flex"><div class="flex-shrink-0 mr-2 take-off"><i class="la la-plane "></i></div><div><h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3><p class="card-meta font-size-14">' + data.result[i].departure_date + '</p><p class="card-meta font-size-14">' + data.result[i].departure_time + '</p></div><div  style=" margin-left:20px"><h3 class="card-title font-size-15 font-weight-medium mb-0">' + onewaystop + ' Stop</h3><hr><h3 class="card-meta font-size-14">' + data.result[i].fly_duration + '</h3></div><div style=" margin-left:20px"  class="flex-shrink-0 mr-2 landing"><i class="la la-plane"></i></div><div><h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3><p class="card-meta font-size-14">' + data.result[i].arrival_date + '</p><p class="card-meta font-size-14">' + data.result[i].arrival_time + '</p></div></div></div>';
					innerHtml += '<div class="card-item flight-card flight--card card-item-list card-item-list-2">';

					if(i == 0){
						innerHtml += '<h5 class="discount-text text-primary">Special fare  upto 30% Off</h5>';
					}
					innerHtml += '<div class="d-flex align-items-center justify-content-between">';
					innerHtml += '<div>';
					innerHtml += '<img src="https://res.cloudinary.com/wego/image/upload/c_fit,w_100,h_100/v20190802/flights/airlines_square/' + data.result[i].validating_carrier + '" height="60px" alt="flight-logo-img">';
					innerHtml += '<span class="airline-name text-color-1">' + data.result[i].onewayFlights[0].airlineName + ' ' + data.result[i].onewayFlights[0].airline + '-' + data.result[i].onewayFlights[0].flight_no + '</span>';
					innerHtml += '</div>';
					innerHtml += '<h6 class="font-weight-bold color-text text-color-3">USD ' + $price.toLocaleString() + '</h6>';
					innerHtml += '</div>';
					innerHtml += '<div class="card-body">';
					innerHtml += '<div class="flight-details">';
					innerHtml += '<div class="row position-relative">';
					if (data.result[i].isReturn == 'Yes') {
						innerHtml += '<div class="flight-time col-md-6">';
					} else {
						innerHtml += '<div class="flight-time col-md-12">';
					}
					innerHtml += '<p class="card-meta font-size-14">One way flight</p>';
					innerHtml += '<div class="flight-time-item d-flex align-items-center justify-content-between">';
					innerHtml += '<div class="text-center">';
					innerHtml += '<h3 class="card-title">' + data.result[i].departure_time + '</h3>';
					innerHtml += '<p class="card-destination">' + data.result[i].onewayFlights[0].cityFrom + '</p>';
					innerHtml += '</div>';
					innerHtml += '<div class="mx-3 text-center">';
					var d_1 = data.result[i].fly_duration;
					var d_arr = d_1.split(': ');
					innerHtml += '<h3 class="card-time font-size-14">' + d_arr[0] + '<span class="text-muted">h</span> ' + d_arr[1] + '<span class="text-muted">m</span></h3>';
					innerHtml += '<hr class="green-hr" />';
					innerHtml += '<h3 class="card-destination text-muted">' + onewaystop + ' Stop</h3>';
					innerHtml += '</div>';
					innerHtml += '<div class="text-center">';
					innerHtml += '<h3 class="card-title">' + data.result[i].arrival_time + '</h3>';
					innerHtml += '<p class="card-destination">' + data.result[i].onewayFlights[0].cityTo + '</p>';
					innerHtml += '</div>';
					innerHtml += '</div>';
					innerHtml += '</div>';

					if (data.result[i].isReturn == 'Yes') {
						// var arraow = '&#8596';
						// innerHtml += '<div class="flight-time pb-3"><p class="card-meta font-size-14">Return flight</p><div class="flight-time-item  d-flex"><div class="flex-shrink-0 mr-2 take-off"><i class="la la-plane"></i></div><div><h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3><p class="card-meta font-size-14">' + data.result[i].return_departure_date + '</p><p class="card-meta font-size-14">' + data.result[i].return_departure_time + '</p></div><div  style=" margin-left:20px"><h3 class="card-title font-size-15 font-weight-medium mb-0">' + returnstop + ' Stop</h3><hr><h3 class="card-meta font-size-14"> ' + data.result[i].return_total_duration + '</h3></div><div style=" margin-left:20px"  class="flex-shrink-0 mr-2 landing"><i class="la la-plane "></i></div><div><h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3><p class="card-meta font-size-14">' + data.result[i].return_arrival_date + '</p><p class="card-meta font-size-14">' + data.result[i].return_arrival_time + '</p></div></div></div>';
						innerHtml += '<div class="flight-time col-md-6 border-left">';
						innerHtml += '<p class="card-meta font-size-14">Return flight</p>';
						innerHtml += '<div class="flight-time-item d-flex align-items-center justify-content-between">';
						innerHtml += '<div class="text-center">';
						innerHtml += '<h3 class="card-title">' + data.result[i].return_departure_time + '</h3>';
						innerHtml += '<p class="card-destination">' + data.result[i].returnFlights[0].cityFrom + '</p>';
						innerHtml += '</div>';
						innerHtml += '<div class="mx-3 text-center">';
						var d_2 = data.result[i].return_total_duration;
						var d_arr2 = d_2.split(': ');
						innerHtml += '<h3 class="card-time font-size-14">' + d_arr2[0] + '<span class="text-muted">h</span> ' + d_arr2[1] + '<span class="text-muted">m</span></h3>';
						innerHtml += '<hr class="green-hr" />';
						innerHtml += '<h3 class="card-destination text-muted">' + returnstop + ' Stop</h3>';
						innerHtml += '</div>';
						innerHtml += '<div class="text-center">';
						innerHtml += '<h3 class="card-title">' + data.result[i].return_arrival_time + '</h3>';
						innerHtml += '<p class="card-destination">' + data.result[i].returnFlights[0].cityTo + '</p>';
						innerHtml += '</div>';
						innerHtml += '</div>';
						innerHtml += '</div>';
					}
					// innerHtml += '</div><div class="btn-box text-center"><a href="flight-booking/' + btoa(data.result[i].id) + '" class="theme-btn theme-btn-small w-100">Book Now</a></div></div></div>';
					innerHtml += '<div class="d-flex align-items-center justify-content-between">';
					innerHtml += '<h5 class="my-2 refund-text"><a href="" class="text-color-4">Partially Refundable</a></h5>';
					innerHtml += '<div class="btn-box text-center my-2"><a href="flight-booking/' + btoa(data.result[i].id) + '" class="theme-btn theme-btn-small">Book Now</a></div>';
					innerHtml += '</div>';
					innerHtml += '</div>';
					innerHtml += '</div>';
					innerHtml += '</div>';
					innerHtml += '</div>';

				}
				jQuery('.flight_ist').html(innerHtml);
			},
			error: function(error) {
				console.log(`Error ${error}`);
			}
		});
	}

	function Get_FlightController() {
		$.ajax({
			//url:'<?php url(''); ?>/travel/apiflight_update_rates.php',
			url: '<?php url(''); ?>/flight-controller',
			type: "GET",
			data: {
				action: "flight-controller",
				search_id: search_session,
				rand: "<?php echo rand(); ?>",
			},
			dataType: "json",
			success: function(data) {
				var cs = data.currency_symbol;
				var airlines = data.airlines;
				var airlinesHtml = '';
				var type = "'filter'";
				for (var i = 0; i < airlines.length; i++) {
					airlinesHtml += '<div class="custom-checkbox"><input onclick="Show_Flights(' + type + ')" type="checkbox" name="airlines" value="' + airlines[i].airline_code + '" id="chba' + i + '" ><label for="chba' + i + '">' + airlines[i].name + ' (' + airlines[i].carriercount + ')</label></div>';
				}
				jQuery('.Airline_Name_Filter').html(airlinesHtml);
				jQuery('.return_Airline_Name_Filter').html(airlinesHtml);
				var stopages = data.stopages;
				var stopagesHtml = '';
				for (var i = 0; i < stopages.length; i++) {
					stopagesHtml += '<div class="custom-checkbox"><input onclick="Show_Flights(' + type + ')" type="checkbox" name="Stops" value="' + stopages[i].max_stops + '" id="stopes' + i + '" ><label for="stopes' + i + '">' + stopages[i].max_stops + ' Stops (' + stopages[i].maxstopcount + ')</label></div>'
				}
				jQuery('.Stops_Filter').html(stopagesHtml);
				jQuery('.return_Stops_Filter').html(stopagesHtml);


				var maxprice = data.maxprice;
				var minprice = data.minprice;
				var rangeSlider = $('#slider-range-price');
				var rangeSliderAmount = $('#price');
				if ($(rangeSlider).length) {
					$(rangeSlider).slider({
						range: true,
						min: minprice,
						max: maxprice,
						values: [minprice, maxprice],
						slide: function(event, ui) {
							$(rangeSliderAmount).val(ui.values[0] + "-" + ui.values[1]);
						}
					});
				}
				$('#price_cs').html(cs);
				$(rangeSliderAmount).val($(rangeSlider).slider("values", 0) + "-" + $(rangeSlider).slider("values", 1));


				var fly_duration_maxtime = data.fly_duration_maxtime;
				var fly_duration_mintime = data.fly_duration_mintime;
				var rangeSliderDuration = $('#slider-range-duration');
				var rangeSliderAmountDuration = $('#duration');
				if ($(rangeSliderDuration).length) {
					$(rangeSliderDuration).slider({
						range: true,
						min: fly_duration_mintime,
						max: fly_duration_maxtime,
						values: [fly_duration_mintime, fly_duration_maxtime],
						slide: function(event, ui) {
							$(rangeSliderAmountDuration).val(ui.values[0] + ":00-" + ui.values[1] + ':00');
						}
					});
				}
				$(rangeSliderAmountDuration).val($(rangeSliderDuration).slider("values", 0) + ":00-" + $(rangeSliderDuration).slider("values", 1) + ':00');

				var fly_duration_maxtime1 = data.returnfly_duration_maxtime;
				var fly_duration_mintime1 = data.returnfly_duration_mintime;
				var return_rangeSliderDuration = $('#return-slider-range-duration');
				var return_rangeSliderAmountDuration = $('#return-duration');
				if ($(return_rangeSliderDuration).length) {
					$(return_rangeSliderDuration).slider({
						range: true,
						min: fly_duration_mintime1,
						max: fly_duration_maxtime1,
						values: [fly_duration_mintime1, fly_duration_maxtime1],
						slide: function(event, ui) {
							$(return_rangeSliderAmountDuration).val(ui.values[0] + ":00 - " + ui.values[1] + ':00');
						}
					});
				}
				$(return_rangeSliderAmountDuration).val($(return_rangeSliderDuration).slider("values", 0) + ":00 - " + $(return_rangeSliderDuration).slider("values", 1) + ':00');
			},
			error: function(error) {
				console.log(`Error ${error}`);
			}
		});
	}

	function ShowHideFilter(type) {
		jQuery('.akm').removeClass('theme-btn-transparent mr-1');
		if (type == 'outbound') {
			jQuery('.onewayfilter').show();
			jQuery('.roundfilter').hide();
			jQuery('.return').addClass('theme-btn-transparent mr-1');
		} else {
			jQuery('.roundfilter').show();
			jQuery('.onewayfilter').hide();
			jQuery('.outbound').addClass('theme-btn-transparent mr-1');
		}
	}
</script>
@include('site.footer')
<script type="text/javascript">
	var timer2 = "5:01";
	var interval = setInterval(function() {
		var timer = timer2.split(':');
		var minutes = parseInt(timer[0], 10);
		var seconds = parseInt(timer[1], 10);
		--seconds;
		minutes = (seconds < 0) ? --minutes : minutes;
		seconds = (seconds < 0) ? 59 : seconds;
		seconds = (seconds < 10) ? '0' + seconds : seconds;
		$('.countdown').html(minutes + ':' + seconds);
		if (minutes < 0) clearInterval(interval);
		if ((seconds <= 0) && (minutes <= 0)) clearInterval(interval);
		timer2 = minutes + ':' + seconds;
	}, 1000);
	if (window.matchMedia("(max-width: 768px)").matches) {
        setTimeout(function() {
            document.getElementById("call").click();
        }, 10000);
    }
</script>
</div>