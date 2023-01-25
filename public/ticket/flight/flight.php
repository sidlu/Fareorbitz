<?php
include('../connection.php');
$results = mysqli_query($con, "select * from bookings where order_id='" . $_REQUEST['order_id'] . "' ");
$Objs = mysqli_fetch_object($results);

$Objs
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fareorbitz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;500;600;700&display=swap");

        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .d-flex {
            display: flex !important;
        }

        a {
            text-decoration: none;
        }

        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        *,
        *::after,
        *::before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        user agent stylesheet div {
            display: block;
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) * -0.5);
            margin-left: calc(var(--bs-gutter-x) * -0.5);
        }

        body {
            font-size: 16px;
            line-height: 1.6;
            font-family: "Hind Madurai", sans-serif;
            color: #000000;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: 0;
        }

        .primary-font {
            font-family: "Montserrat", sans-serif;
        }

        .title {
            font-size: 18px;
            color: #0d233e;
        }

        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .d-flex {
            display: flex !important;
        }

        .blue-title {
            color: #153d6c;
            font-size: 14px;
            font-weight: 600;
        }

        .light-blue-bg {
            background-color: #f6faff;
            padding: 6px 15px;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .flight-details .card-title {
            font-size: 20px !important;
            font-weight: 600;
        }

        .color-blue {
            color: #153d6c;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .font-size-24 {
            font-size: 24px !important;
        }

        .card-meta {
            text-transform: capitalize;
            font-size: 18px;
            color: #333;
        }

        .font-size-14 {
            font-size: 14px !important;
        }

        hr {
            margin: 0.3rem 0;
        }

        .flight-title {
            color: #333;
            font-size: 18px;
            font-family: "Hind Madurai", sans-serif;
            font-weight: 500;
        }

        .border-table {
            border: 1px solid #dee2e6;
        }

        .border-table tr td {
            font-size: 14px;
        }
    </style>
</head>

<section class="confirmation-section py-5 mt-5 html-content">
    <table align="center" border="0" bgcolor="#fff" cellspacing="0" cellpadding="0" style="padding-left: 10px; padding-right: 10px; font-family: Arial,sans-serif; color: #333333; width: 90%; margin-left:auto;margin-right:auto; background-color: #ffffff;">
        <tr>
            <td align="left" valign="top" style="font-family: Arial,Helvetica,sans-serif; padding:10px; text-align:left;">
                <h3 class="title primary-font text-left"><b>TICKET</b> - <?php echo $Objs->booking_status; ?></h3>
            </td>
            <td>
                <p class="primary-font" style="text-align: right;"><b>Booking Id : </b> <?php echo $Objs->order_id; ?></p>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="height: 15px"></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <table class="table border-table" style="width: 100%;">
                    <tr class="light-blue-bg">
                        <th style="text-align: left;">
                            <h4 class="blue-title">PNR</h4>
                        </th>
                        <th style="text-align: left;">
                            <h4 class="blue-title">Order ID</h4>
                        </th>
                        <th style="text-align: left;">
                            <h4 class="blue-title">Email</h4>
                        </th>
                        <th style="text-align: left;">
                            <h4 class="blue-title">Contact No</h4>
                        </th>
                        <th style="text-align: left;">
                            <h4 class="blue-title">Booking Date</h4>
                        </th>

                    </tr>
                    <tr>
                        <td style="text-align: left;"> <?php echo $Objs->pnr; ?></td>
                        <td style="text-align: left;"> <?php echo $Objs->order_id; ?></td>
                        <td style="text-align: left;"> <?php echo $Objs->email; ?></td>
                        <td style="text-align: left;"> <?php echo $Objs->phone; ?></td>
                        <td style="text-align: left;"> <?php echo $Objs->created_at; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="height: 15px"></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <table class="table border-table" style="width:100%">
                    <tr class="light-blue-bg">
                        <th>
                            <h4 class="blue-title">SN</h4>
                        </th>
                        <th>
                            <h4 class="blue-title">PASSENGER NAME</h4>
                        </th>
                        <th>
                            <h4 class="blue-title">DOB</h4>
                        </th>
                        <th>
                            <h4 class="blue-title">Gender</h4>
                        </th>

                    </tr>
                    <?php $travellers = json_decode($Objs->travellers, true);
                    for ($i = 0; $i < count($travellers); $i++) { ?>
                        <tr>
                            <td><span class="text-muted"><?php echo $i + 1; ?>.</td>
                            <td> </span><?php echo $travellers[$i]['name']['firstName'] . ' ' . $travellers[$i]['name']['lastName'] ?></td>
                            <td><?php echo $travellers[$i]['dateOfBirth']; ?></td>
                            <td><span class="text-muted"><?php echo $travellers[$i]['gender']; ?></span></td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="height: 15px"></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <div class="flight">
                    <div class="light-blue-bg mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="blue-title"></h4>
                            </div>
                            <div class="col-md-4 text-md-center">
                                <h4 class="blue-title">Oneway Flight</h4>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <h4 class="blue-title"></h4>
                            </div>
                        </div>
                    </div>
                    <?php $OF = json_decode($Objs->onewayFlights, true);
                    for ($i = 0; $i < count($OF); $i++) { ?>
                        <div class="row py-3">
                            <div class="col-md-4">
                                <div class="an-container text-center">
                                    <img src="https://res.cloudinary.com/wego/image/upload/c_fit,w_100,h_100/v20190802/flights/airlines_square/<?php echo $OF[$i]['airline']; ?>" alt="flight-logo-img">
                                </div>
                                <div class="text-center">
                                    <p class="flight-title"><?php echo $OF[$i]['airlineName']; ?></p>
                                    <p class="flight-title"><?php echo $OF[$i]['airline']; ?>-<?php echo $OF[$i]['flight_no']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div style="text-align: center;" class="flight-details py-3">
                                    <div class="flight-time pb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-md-end" style="width:200px; margin:10px 20px; ">
                                                <h3 class="card-title font-size-24 font-weight-bold color-blue mb-0"><?php echo $OF[$i]['flyFrom']; ?></h3>
                                                <p class="color-blue"><?php echo $OF[$i]['cityFrom']; ?></p>
                                                <hr>
                                                <p class="card-meta font-size-14"><?php echo $OF[$i]['departure_time']; ?>, <?php echo $OF[$i]['departure_day'] . " " . $OF[$i]['departure_month']; ?></p>
                                                <hr>
                                                <p class="card-meta font-size-14"><?php echo $OF[$i]['origin_AirportName']; ?></p>
                                            </div>
                                            <div class="px-5" style="width:200px; margin:10px 20px; ">
                                                <img src="https://fareorbitz.indwebdesign.com/images/half-arrow-2.png" class="img-fluid" alt="">
                                                <h3 class="card-title font-size-15 font-weight-medium mb-0"><?php echo $OF[$i]['fly_duration']; ?></h3>
                                                <hr>
                                                <h3 class="card-meta font-size-14">Economy</h3>
                                            </div>
                                            <div class="text-md-left" style="width:200px; margin:10px 20px;">
                                                <h3 class="card-title font-size-24 font-weight-bold color-blue mb-0"><?php echo $OF[$i]['flyTo']; ?></h3>
                                                <p class="color-blue"><?php echo $OF[$i]['cityTo']; ?></p>
                                                <hr>
                                                <p class="card-meta font-size-14"><?php echo $OF[$i]['arrival_time']; ?>, <?php echo $OF[$i]['arrival_day'] . " " . $OF[$i]['arrival_month']; ?></p>
                                                <hr>
                                                <p class="card-meta font-size-14"><?php echo $OF[$i]['destination_AirportName']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="height: 15px"></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <?php if ($Objs->returnFlights != '') { ?>
                    <div class="flight">
                        <div class="light-blue-bg mt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="blue-title"></h4>
                                </div>
                                <div class="col-md-4 text-md-center">
                                    <h4 class="blue-title">Return Flights</h4>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <h4 class="blue-title"></h4>
                                </div>
                            </div>
                        </div>
                        <?php $OF = json_decode($Objs->returnFlights, true);
                        for ($i = 0; $i < count($OF); $i++) { ?>
                            <div class="row py-3">
                                <div class="col-md-4">
                                    <div class="an-container text-center">
                                        <img src="https://res.cloudinary.com/wego/image/upload/c_fit,w_100,h_100/v20190802/flights/airlines_square/<?php echo $OF[$i]['airline']; ?>" alt="flight-logo-img">
                                    </div>
                                    <div class="text-center">
                                        <p class="flight-title"><?php echo $OF[$i]['airlineName']; ?></p>
                                        <p class="flight-title"><?php echo $OF[$i]['airline']; ?>-<?php echo $OF[$i]['flight_no']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="text-align: center;" class="flight-details py-3">
                                        <div class="flight-time pb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="text-md-end" style="width:200px; margin:10px 20px; ">
                                                    <h3 class="card-title font-size-24 font-weight-bold color-blue mb-0"><?php echo $OF[$i]['flyFrom']; ?></h3>
                                                    <p class="color-blue"><?php echo $OF[$i]['cityFrom']; ?></p>
                                                    <hr>
                                                    <p class="card-meta font-size-14"><?php echo $OF[$i]['departure_time']; ?>, <?php echo $OF[$i]['departure_day'] . " " . $OF[$i]['departure_month']; ?></p>
                                                    <hr>
                                                    <p class="card-meta font-size-14"><?php echo $OF[$i]['origin_AirportName']; ?></p>
                                                </div>
                                                <div class="px-5" style="width:200px; margin:10px 20px; ">
                                                    <img src="https://fareorbitz.indwebdesign.com/images/half-arrow-2.png" class="img-fluid" alt="">
                                                    <h3 class="card-title font-size-15 font-weight-medium mb-0"><?php echo $OF[$i]['fly_duration']; ?></h3>
                                                    <hr>
                                                    <h3 class="card-meta font-size-14">Economy</h3>
                                                </div>
                                                <div class="text-md-left" style="width:200px; margin:10px 20px; ">
                                                    <h3 class="card-title font-size-24 font-weight-bold color-blue mb-0"><?php echo $OF[$i]['flyTo']; ?></h3>
                                                    <p class="color-blue"><?php echo $OF[$i]['cityTo']; ?></p>
                                                    <hr>
                                                    <p class="card-meta font-size-14"><?php echo $OF[$i]['arrival_time']; ?>, <?php echo $OF[$i]['arrival_day'] . " " . $OF[$i]['arrival_month']; ?></p>
                                                    <hr>
                                                    <p class="card-meta font-size-14"><?php echo $OF[$i]['destination_AirportName']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="height: 15px"></td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="font-family: Arial,Helvetica,sans-serif; padding:10px;">
                <table class="table border-table mt-4" style="width: 100%; padding:15px">
                    <tr class="light-blue-bg">
                        <td>
                            <h4 class="blue-title">IMPORTANT INFORMATION</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><b>Check-in Time :</b> Passenger to report 2 hours before departure. Check-in procedure and baggage drop will close 1 hour before departure.</li>
                                <li><b>Valid ID proof needed : </b> Please carry a valid Passport and Visa (mandatory for international travel). Passport should have at least 6
                                    months of validity at the time of travel.</li>
                                <li><b>Beware of fraudsters : </b> Please do not share your personal banking and security details like passwords, CVV, etc. with any third person
                                    or party claiming to represent Fareorbitz. For any query, please reach out to Fareorbitz on our official customer care number.</li>
                                <li><b>You have paid: <?php echo "$" . $Objs->prices; ?> </b></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="height: 15px"></td>
                    </tr>
                    <tr class="light-blue-bg">
                        <td>
                            <h4 class="blue-title">PAYMENT INFORMATION</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li>You have Paid <b><?php echo "$" . $Objs->prices; ?></b> | For Fare Breakup <a href="#" target="_blank">Get Invoice</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="height: 15px"></td>
                    </tr>
                    <tr class="light-blue-bg">
                        <td>
                            <h4 class="blue-title">CANCELLATION AND DATE CHANGE CHARGES</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="pb-3">Partial cancellation of itinerary is not allowed. To Cancel or Modify this booking, visit : </b><a href="https://fareorbitz.com/contact-us" target="_blank">https://fareorbitz.com/contact-us</a></p>
                            <div class="row" style="display:none">
                                <div class="col-md-6 mb-2">
                                    <table class="table table-bordered">
                                        <tr class="light-blue-bg">
                                            <th>
                                                <h4 class="blue-title">DEL-SGN,SGN-DPS</h4>
                                            </th>
                                            <th colspan="3" class="text-end">
                                                <h4 class="blue-title">Cancellation Charges</h4>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Type</td>
                                            <td>Condition</td>
                                            <td>Airline</td>
                                            <td>Fareorbitz</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" rowspan="3">Adult</td>
                                            <td>0 hrs - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>1 day - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>0 hrs - 1 day</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <table class="table table-bordered">
                                        <tr class="light-blue-bg">
                                            <th>
                                                <h4 class="blue-title">DEL-SGN,SGN-DPS</h4>
                                            </th>
                                            <th colspan="3" class="text-end">
                                                <h4 class="blue-title">Cancellation Charges</h4>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Type</td>
                                            <td>Condition</td>
                                            <td>Airline</td>
                                            <td>Fareorbitz</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" rowspan="3">Adult</td>
                                            <td>0 hrs - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>1 day - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>0 hrs - 1 day</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <table class="table table-bordered">
                                        <tr class="light-blue-bg">
                                            <th>
                                                <h4 class="blue-title">SGN-DEL</h4>
                                            </th>
                                            <th colspan="3" class="text-end">
                                                <h4 class="blue-title">Cancellation Charges</h4>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Type</td>
                                            <td>Condition</td>
                                            <td>Airline</td>
                                            <td>Fareorbitz</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" rowspan="3">Adult</td>
                                            <td>0 hrs - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>1 day - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>0 hrs - 1 day</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <table class="table table-bordered">
                                        <tr class="light-blue-bg">
                                            <th>
                                                <h4 class="blue-title">SGN-DEL</h4>
                                            </th>
                                            <th colspan="3" class="text-end">
                                                <h4 class="blue-title">Cancellation Charges</h4>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Type</td>
                                            <td>Condition</td>
                                            <td>Airline</td>
                                            <td>Fareorbitz</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" rowspan="3">Adult</td>
                                            <td>0 hrs - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>1 day - 365 days</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                        <tr>
                                            <td>0 hrs - 1 day</td>
                                            <td class="text-center" colspan="2">Non-Refundable</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="height: 15px"></td>
                    </tr>
                    <tr class="light-blue-bg">
                        <td>
                            <h4 class="blue-title">24x7 CUSTOMER SUPPORT</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <table class="table table-bordered" style="width: 100%; margin-top:20px">
                                <tr class="light-blue-bg">
                                    <td align="center" colspan="2">
                                        <h4 class="blue-title">Fareorbitz Support</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%;">Tel</th>
                                    <td style="width: 80%;">
                                        <p>+1-888-926-8555</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%;">Email</th>
                                    <td style="width: 80%;">
                                        <p>promotionalfare@fareorbitz.com</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%;">Web</th>
                                    <td style="width: 80%;">
                                        <a href=" https://fareorbitz.com/contact-us" target="_blank"> https://fareorbitz.com/contact-us</a>
                                    </td>
                                </tr>
                                <?php if ($_REQUEST['action'] == 'mail') { ?>
                                    <tr>
                                        <th style="width: 20%;">Note:</th>
                                        <td style="width: 80%;">
                                            <p>Please do not reply to this mail. It has been sent from an email account that is not monitored. To receive communication from fareorbitz.com, please add noreply@fareorbitz.com to your contact list and address book.</p>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</section>

</html>

<?php
function get_url()
{
    return $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
}
?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
    jQuery(".common_beard_comb").hide();
    jQuery(".preloader").hide();
    <?php if ($_REQUEST['action'] == 'download') { ?> CreatePDFfromHTML();
    <?php } ?>



    function CreatePDFfromHTML() {
        //$(".html-content").show();
        var HTML_Width = $(".html-content").width();
        var HTML_Height = $(".html-content").height();
        var top_left_margin = 15;
        var PDF_Width = HTML_Width + (top_left_margin * 2);
        var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
        var canvas_image_width = HTML_Width;
        var canvas_image_height = HTML_Height;

        var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

        html2canvas($(".html-content")[0]).then(function(canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
            for (var i = 1; i <= totalPDFPages; i++) {
                pdf.addPage(PDF_Width, PDF_Height);
                pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4), canvas_image_width, canvas_image_height);
            }
            pdf.save("Eticket_<?php echo $_REQUEST['order_id']; ?>.pdf");
            //$(".html-content").hide();
            history.back(1);
        });
    }
</script>