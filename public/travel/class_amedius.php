<?php 
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');

header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");

include('connection.php');

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

$objTBOFlights = new Amedius_Flight();

if($_REQUEST['action']=='CreateToken'){
  $response=$objTBOFlights->CreateToken($TokenEndPoint,$ClientId,$client_secret);
  echo $response;
}


class Amedius_Flight{
   public $response;
  
  public function getFlightLocations($term,$language){
	$URL ="https://www.jetradar.com/autocomplete/places?limit=5&locale=en&q=".$term; 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close ($ch);  
	return $response;
  }
  
  public function CreateToken($TokenEndPoint,$ClientId,$client_secret){
	global $con;
	
	/*== Production authentication url ===*/	
	$URL=$TokenEndPoint;	
	
	$currDateTime =date('Y-m-d H:i:s'); 
	
	$postdata =array('grant_type'=>"client_credentials",'client_id'=>$ClientId,'client_secret'=>$client_secret);
	
	$headers= array('Content-Type: application/x-www-form-urlencoded'); 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
	 $contents = curl_exec($ch);
	curl_close($ch);
	
	$jsonData =json_decode($contents,true);
	
	if($jsonData['state']=='approved'){ $TokenId =$jsonData['access_token'];}
	
	mysqli_query($con,"insert into personal_access_tokens SET tokenable_type='".$jsonData['token_type']."',abilities='".$jsonData['token_type']."',name='".$jsonData['application_name']."',expire_in='".$jsonData['expires_in']."',token='".$jsonData['access_token']."',response='".$jcontents."',created_at='".date('Y-m-d H:i:s')."'  "); 
	
	

				return json_encode(array('token'=>$TokenId,'search_id'=>uniqid()));
	
	
	 
	//$this->createLogFile('Token-'.$ClientId,json_encode($postdata),$contents);
	
	//return $contents; 
	  
   }
  
  public function FlightLists($apiKey,$endpoint,$TokenId,$flyFrom,$flyTo,$countryFrom,$countryTo,$departure_date,$retutn_date,$adults,$childrens,$infants,$typeFlight,$cabinType,$EndUserIp,$currency,$language,$limit) {
	global $con; 
	
	
	if($limit==''){$limit = 50;}
	
	$actionUrl=$endpoint.'/shopping/flight-offers';
	
	if($cabinType!='Any' && $cabinType!=''){
		$originDestinations[] = array('id'=>1,'originLocationCode'=>$flyFrom,'destinationLocationCode'=>$flyTo,'departureDateTimeRange'=>array('date'=>$departure_date));
		
		 if($typeFlight==2){
		 $originDestinations[]=  array('id'=>2,'originLocationCode'=>$flyTo,'destinationLocationCode'=>$flyFrom,'departureDateTimeRange'=>array('date'=>$retutn_date));
		 }
		 
		$travelers = array();
		for($i=0;$i<$adults;$i++){
			$travelers[] = array('id'=>$i,'travelerType'=>'ADULT');
		}
		if($childrens){
			for($i=0;$i<$childrens;$i++){
			$travelers[] = array('id'=>($i+$adults),'travelerType'=>'CHILD');
		}
		}
		if($infants){
			for($i=0;$i<$infants;$i++){
			$travelers[] = array('id'=>($i+$adults+$infants),'travelerType'=>'INFANT');
		}
		}
		
		$sources = array('GDS');
		$originDestinationIds=array('1');
		
		$cabinRestrictions[] = array('cabin'=>$cabinType,'coverage'=>'MOST_SEGMENTS','originDestinationIds'=>$originDestinationIds);
		
		$excludedCarrierCodes= array('AA','TP','AZ');
		
		$carrierRestrictions = array('excludedCarrierCodes'=>$excludedCarrierCodes);
		
		$searchCriteria = array('maxFlightOffers'=>$limit,'flightFilters'=>array('cabinRestrictions'=>$cabinRestrictions,'carrierRestrictions'=>$carrierRestrictions));
		
		$postdata = array('currencyCode'=>$currency,'originDestinations'=>$originDestinations,'travelers'=>$travelers,'sources'=>$sources,'searchCriteria'=>$searchCriteria);
		
		$URL = $actionUrl;
		$headers= array('Content-Type: application/vnd.amadeus+json', 'Authorization: Bearer '.$TokenId); 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $URL);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_ENCODING, "gzip");
		$contents = curl_exec($ch);
		curl_close($ch);

       $LogStr="Token:".$TokenId;
	   $this->createLogFile('FlightLists',json_encode($postdata).$LogStr,$contents);
	   return $contents;
	
	   }
	   else{
		if($typeFlight==2){ $returnDate = "&returnDate=".$retutn_date;}
		
		$URL = $actionUrl."?originLocationCode=".$flyFrom."&destinationLocationCode=".$flyTo."&departureDate=".$departure_date.$returnDate."&adults=".$adults."&children=".$childrens."&infants=".$infants."&currencyCode=".$currency."&nonStop=false&max=".$limit;
		$headers= array('Authorization: Bearer '.$TokenId); 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $URL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$contents = curl_exec($ch);
		curl_close ($ch);
		
		$LogStr="Token:".$TokenId;
		$this->createLogFile('FlightLists',$URL.''.json_encode($headers).$LogStr,$contents);
		return $contents;
	 }
    }
  
   public function checkprice($apiKey,$data_response,$endpoint,$TokenId,$requestAddBaggagee) {
	global $con;
	
	if($requestAddBaggagee=="Yes"){
	$actionUrl=$endpoint.'/shopping/flight-offers/pricing?include=bags';
	}
	else{
	$actionUrl=$endpoint.'/shopping/flight-offers/pricing';
	}
	
	$postdata['data'] =array('type'=>'flight-offers-pricing','flightOffers'=>array(json_decode($data_response)));
	$URL = $actionUrl;
	
	$headers= array('Content-Type: application/vnd.amadeus+json', 'Authorization: Bearer '.$TokenId); 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
	$contents = curl_exec($ch);
	curl_close($ch);	
	
	$sendData = "actionUrl===$actionUrl <br> , header ==== '".json_encode($headers)."', postData === '".json_encode($postdata)."' <br> ";
	$this->createLogFile('Flight_Offers_Price-'.$TokenId,$sendData,$contents);
	
	return $contents;
    }
 
  
  public function Generate_PNR($apiKey,$endpoint,$TokenId,$requestBody) {
	global $con; 

	$actionUrl=$endpoint.'/booking/flight-orders';
	$postdata =$requestBody;
	
	$headers= array('Content-Type: application/vnd.amadeus+json', 'Authorization: Bearer '.$TokenId); 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$actionUrl);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    $contents = curl_exec($ch);
	curl_close($ch);
	
	$LogStr = "header ==== '".json_encode($headers)."', postData === '".json_encode($postdata)."'";
	
	$this->createLogFile($TokenId.'-Flight_Create_Orders',$LogStr,$contents);	
	
    //$this->createLogFile($TokenId.'Ticket_For_FLIGHT',json_encode($postdata),$contents);	
	return $contents;
	
  }
  
  public function ReviewCancellation($apiKey,$endpoint,$BookingId,$TokenId,$client_secret) {
	  
	global $con;
	
	$query =mysqli_query($con,"Select * from amadius_token WHERE client_secret='".$client_secret."'");
	$obj =mysqli_fetch_object($query);
	
	$TokenId=$obj->token;
	   
    $actionUrl=$endpoint.'/booking/flight-orders/'.$BookingId;
	
	$headers= array('Authorization: Bearer '.$TokenId); 
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $actionUrl);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$contents = curl_exec($ch);
	curl_close ($ch);
	
	$this->createLogFile('Cancel_Booking-'.$BookingId,$actionUrl,$contents);
	
	return $contents;
	
  }
  
   public function cancel_booking($apiKey,$endpoint2,$currency,$booking_amount,$booking_mode,$booking_id,$TokenId) {
	   
    $actionUrl=$endpoint2.'/booking/flight-orders/'.$booking_id;
	
	$URL = $actionUrl;
	$headers= array('Authorization: Bearer '.$TokenId); 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$contents = curl_exec($ch);
	curl_close ($ch);
	return  $contents;
	$this->createLogFile('Cancel_booking',json_encode($postdata),$contents);
	
  }
  
  public function createLogFile($action,$request,$response){
	$log_filename = "/opt/bitnami/apps/wordpress/htdocs/webServices/amediusFly/v1/LogFile";
    if (!file_exists($log_filename)) {  
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/'.$action.'_'.date('d-M-Y').'.txt';
	
	$log_data ="===========Request($action)========="."\n";
	$log_data.=$request."\n";
	$log_data.="===========Response($action)========="."\n";
	$log_data.=$response."\n";
	
    file_put_contents($log_file_data, $log_data . "\n", FILE_APPEND);
  }
  
}
?>