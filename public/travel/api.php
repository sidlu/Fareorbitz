<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");


include('class_amedius.php');


$action =@$_REQUEST['action'] ;
$language =$_REQUEST['language'];
if($language==''){
$language ='en';	
}
$currency =$_REQUEST['currency'];
$booking_id =$_REQUEST['booking_id'];


$method=$_REQUEST['method'];
$limit=$_REQUEST['limit'];

$contentType =$_REQUEST['contentType'];

if($action=='Generate_PNR'){
$jsonStr = file_get_contents("php://input");
$requestBody =json_decode($jsonStr,true);		
}
else{
$requestBody =json_decode($_REQUEST['requestBody'],true);	
}



/* print_r($_REQUEST['requestBody']);
$txt = $_REQUEST['requestBody'];
echo "===--ooooo--====";
print_r(json_decode($_REQUEST['requestBody']));
echo "===--ooooo--====";

print_r(json_decode($txt,true));
 */
$term =$requestBody['term'];
$flyFrom =$requestBody['flyFrom'];
$flyTo =$requestBody['flyTo'];
$countryFrom =$requestBody['countryFrom'];
$countryTo = $requestBody['countryTo'];
$departure_date_arr =explode('/',$requestBody['departure_date']);
$return_date_arr =explode('/',$requestBody['return_date']);
$departure_date =$departure_date_arr[2].'-'.$departure_date_arr[1].'-'.$departure_date_arr[0];
$return_date =$return_date_arr[2].'-'.$return_date_arr[1].'-'.$return_date_arr[0];
$adults =$requestBody['adults'];
$childrens =$requestBody['childrens'];
$infants =$requestBody['infants'];
$typeFlight=$requestBody['typeFlight'];
$cabinType =$requestBody['cabinType'];
$TokenId =$requestBody['TokenId'];
$data_response =$requestBody['data_response'];
$TraceId =$requestBody['TraceId'];
$ResultIndex =$requestBody['ResultIndex'];
$Passengers =$requestBody['Passengers'];
$AgentReferenceNo =$requestBody['AgentReferenceNo'];

$PNR =$requestBody['PNR'];
$BookingId =$requestBody['BookingId'];
$Remarks =$requestBody['remarks'];

//Extra Data
$order_id =$requestBody['order_id'];
$amadeus_request =$requestBody['amadeus_request'];

$IsDomesticReturn =$requestBody['IsDomesticReturn'];
$adh_chargeableRate =$requestBody['adh_chargeableRate'];
$booking_amount =$requestBody['booking_amount'];
$chargeableRate =$requestBody['chargeableRate'];
$base_fare =$requestBody['base_fare'];
$tax =$requestBody['tax'];
$Segments =$requestBody['Segments'];
$RefererSite =$requestBody['RefererSite'];
$Source=$requestBody['Source'];
$requestAddBaggagee=$requestBody['requestAddBaggagee'];

$booking_mode='Live';

/*===Amadeus PRE-DRODUCTION DETAILS ===*/

$ClientId='Ys9GvYCbLH29hdBVFXUMYfrrmBVwxguk';
$client_secret = 'SBwSZpxBX1rR06lA';

if($booking_mode=='Live'){
$TokenEndPoint  = 'https://api.amadeus.com/v1/security/oauth2/token';
$endpoint="https://api.amadeus.com/v2";
$booking_endpoint='https://api.amadeus.com/v1';
}else{
$TokenEndPoint  = 'https://test.api.amadeus.com/v1/security/oauth2/token';
$endpoint="https://test.api.amadeus.com/v2";
$booking_endpoint='https://test.api.amadeus.com/v1';
}

$EndUserIp=$_SERVER["REMOTE_ADDR"];



if($action=='getFlightLocations'){
  $response = $objTBOFlights->getFlightLocations($term,$language);
  echo $response;
}
else if($action=='CreateToken'){
  $response=$objTBOFlights->CreateToken($TokenEndPoint,$ClientId,$client_secret);
  echo $response;
}
else if($action=='FlightLists'){
   $response=$objTBOFlights->FlightLists($apiKey,$endpoint,$TokenId,$flyFrom,$flyTo,$countryFrom,$countryTo,$departure_date,$return_date,$adults,$childrens,$infants,$typeFlight,$cabinType,$EndUserIp,$currency,$language,$limit);
  echo $response;
}
else if($action=='checkprice'){
  $response=$objTBOFlights->checkprice($apiKey,$data_response,$booking_endpoint,$TokenId,$requestAddBaggagee);
  echo $response;
}
else if($action=='Generate_PNR'){
	//$amadeus_request = json_decode(file_get_contents('php://input'),true);
	$response=$objTBOFlights->Generate_PNR($apiKey,$booking_endpoint,$_REQUEST['TokenId'],$requestBody);
    echo $response;
}

else if($action=='ReviewCancellation'){
  $response = $objTBOFlights->ReviewCancellation($apiKey,$booking_endpoint,$BookingId,$TokenId,$client_secret);
  echo $response;
}


else if($action=='cancel_booking'){
  $response = $objTBOFlights->cancel_booking($apiKey,$booking_endpoint,$currency,$booking_amount,$booking_mode,$booking_id,$TokenId);
  echo $response;
}

/*=== Flight Test Booking ===*/
else if($action=='TestFlightBooking'){
$booking_status ='Confirmed';	
$BookingId =rand();
$PNR ='ADH-'.$BookingId;
$RefererSite=$RefererSite;

$OutbondSegment =$Segments[0];
if($IsDomesticReturn=='Yes'){
 $InbondSegment =$Segments[0]; // It will come seperate In domestic case	
}
else{
 $InbondSegment =$Segments[1];	
}

$origon_airport =$OutbondSegment[0]['Origin']['Airport']['AirportCode'];
$from_city =$OutbondSegment[0]['Origin']['Airport']['CityName'];
$destination_airport =$OutbondSegment[$countSegment-1]['Destination']['Airport']['AirportCode'];
$to_city =$OutbondSegment[$countSegment-1]['Destination']['Airport']['CityName'];

$ResponseArr['Response'] =array('B2B2BStatus'=>'false','Error'=>array('ErrorCode'=>'0','ErrorMessage'=>''),'ResponseStatus'=>1,
								'TraceId'=>$TraceId,
								'Response'=>array('PNR'=>$PNR,'BookingId'=>$BookingId,'RefererSite'=>$RefererSite,
												  'FlightItinerary'=>array('Origin'=>$from_city,'Destination'=>$to_city,'AirlineCode'=>$origon_airport,'Passenger'=>$Passengers,'Segments'=>$Segments))
								);
$response =json_encode($ResponseArr);								
 
$t = manageFlightDataOnServer($apiKey,$order_id,$TokenId,$TraceId,$PNR,$BookingId,$booking_mode,$booking_status,$chargeableRate,$booking_amount,$base_fare,$tax,$currency,$IsDomesticReturn,$Passengers,$Segments,$RefererSite,$response);
echo $response;	
}
else{
  $status =500; 	
  $status_message=$errorResponse[$status];
  $data='null';
  response($status,$status_message,$data);
}

function response($status,$status_message,$data)
{
	//header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['responseData']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}


?>