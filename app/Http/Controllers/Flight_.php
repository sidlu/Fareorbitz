<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud_Model;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Auth;

class Flight extends Controller
{ 	
		public $currency='';  public $currency_symbol='';
		/*public $client_secret='JASMXQC0g0xlHGTa';// 'G1sYa6UxGisARhgk'; //
		public $ClientId='IToskeXlBjNlEKHcHpIqhPGvQ6eG08tN';// 'UODr3c95CMjvEwIRQ2QT2R1i6SBDdA64'; //*/
		
		
		//live API
		public $client_secret='d2F1LsD5BtRohX8Q';
		public $ClientId='dHd7Xtm2YWErMYTfoPPXW4czJjd7pglS';
		
		/*public $client_secret='Gf92RTvMpmhTbdwL';
		public $ClientId='5bbvB3OuS8rO7s8ITGGfCW5svf4NISTY';*/
		
		public $booking_mode='Live'; public $TokenEndPoint= ''; public $endpoint= ''; public $booking_endpoint= '';
		
		public function __construct(){
			
			if($this->booking_mode=='Live'){
				$this->TokenEndPoint  = 'https://api.amadeus.com/v1/security/oauth2/token';
				$this->endpoint="https://api.amadeus.com/v2";
				$this->booking_endpoint='https://api.amadeus.com/v1';
			}else{
				$this->TokenEndPoint  = 'https://test.api.amadeus.com/v1/security/oauth2/token';
				$this->endpoint="https://test.api.amadeus.com/v2";
				$this->booking_endpoint='https://test.api.amadeus.com/v1';
			}
		}
		
		public function createToken(){
			$URL=$this->TokenEndPoint;	
			$currDateTime =date('Y-m-d H:i:s'); 
			$postdata =array('grant_type'=>"client_credentials",'client_id'=>$this->ClientId,'client_secret'=>$this->client_secret);
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
				
				$data=array(
						'tokenable_type'=>$jsonData['token_type'],
						'abilities'=>$jsonData['token_type'],
						'name'=>$jsonData['application_name'],
						'expire_in'=>$jsonData['expires_in'], 
						'token'=>$jsonData['access_token'], 
						'response'=>$contents,
						'created_at'=>date('Y-m-d H:i:s')
				);
				Crud_Model::insertData('personal_access_tokens',$data);
				return json_encode(array('token'=>$TokenId,'search_id'=>uniqid()));
		}
		
		public function GetLocation(Request $request) 
    	{	
			$request= $request->input();
			$Obj = DB::select("select * from personal_access_tokens order by id DESC LIMIT 1");
			$TokenId =$Obj[0]->token; 
			$expire_in =$Obj[0]->expire_in; 
			$created_at =strtotime($Obj[0]->created_at);
			$current_time =strtotime(date('Y-m-d H:i:s'));
			$time_deff=$current_time-$created_at;
			
			if($time_deff>$expire_in){  
				$res=json_decode($this->createToken(),true);
				$TokenId=$res['token'];
			}

			$URL = $this->booking_endpoint."/reference-data/locations?subType=AIRPORT&keyword=".$request['keyword'];
			$headers= array('Authorization: Bearer '.$TokenId);  
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $URL);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$contents = curl_exec($ch);
			curl_close ($ch);
			echo $contents = curl_exec($ch);
		}	
	
	
	public function SearchRequest(Request $request) 
    {		
		$request= $request->input();
		$TokenId = $request['api_token']; 
		$search_id = $request['search_id'];
		$OfferId=uniqid();
		if($request['flighttype']=='return'){ $isReturn='Yes'; $is_return=1; }else{ $isReturn='No'; $is_return=0;  }
		$IATA_from=$request['IATA_from'];
		$IATA_to=$request['IATA_to'];
		$From_IATACODE=$IATA_from;  $To_IATACODE=$IATA_to;
		$isDomestic='No';
		$adults=$request['adults'];
		$childs=$request['childs'];
		$infants=$request['infants'];
		$infants2=$request['infants2'];
		$cabin_class=$request['cabin_class'];		
		$date = str_replace('/', '-', $request['departure_date']);
		$departure_date= date('Y-m-d', strtotime($date));
		$date = str_replace('/', '-', $request['return_date']);
		$return_date= date('Y-m-d', strtotime($date));
		$limit='';
		$currency='USD';
		 if($isReturn=='Yes'){
			  $returnDate = "&returnDate=".$return_date;
		   }else{
			  $returnDate = "";
			}
		  if($limit==''){
			  $limit = 50;
		  }
	  
		$actionUrl=$this->endpoint.'/shopping/flight-offers';

		 $URL = $actionUrl."?originLocationCode=".$IATA_from."&destinationLocationCode=".$IATA_to."&departureDate=".$departure_date.$returnDate."&adults=".$adults."&children=".(intval($childs)+intval($infants2))."&infants=".$infants."&currencyCode=".$currency."&nonStop=false&max=".$limit;
			
			
		$headers= array('Authorization: Bearer '.$TokenId);  
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $URL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		 $contents = curl_exec($ch);
		curl_close ($ch);
		
		$res=json_decode($contents,true);
		$this->createLogFile('FlightLists',$URL.'\r\nheaders=='.json_encode($headers),$contents);
		$countryFrom='';
		$countryTo='';
		
		if (isset($res['data'])) {
		$Response=$res['data'];
		$api_currency=$Response[0]['price']['currency'];

		for ($i = 0; $i < count($Response); $i++) {
			$dataArr = $Response[$i];
			$numberOfBookableSeats = $dataArr['numberOfBookableSeats'];
			if ($dataArr['source'] == 'GDS') {
				$isLCC = 0;
			} else {
				$isLCC = 1;
			}

			$price = $dataArr['price'];
			$itineraries = $dataArr['itineraries'];
			$pricingOptions = $dataArr['pricingOptions'];
			$validatingAirlineCodes = $dataArr['validatingAirlineCodes'];
			$travelerPricings = $dataArr['travelerPricings'][0];
			$fareDetailsBySegment = $travelerPricings['fareDetailsBySegment'];
			
			if (isset($validatingAirlineCodes[1])) {
				$return_validating_carrier = $validatingAirlineCodes[1];
			} else {
				$return_validating_carrier = $validatingAirlineCodes[0];
			}

			$Dep_totalstops = (count($itineraries[0]['segments']) - 1);
			$segments = $itineraries[0]['segments'][0];
			$max_stops = $segments['numberOfStops'];
			$departure = $segments['departure'];
			$arrival = $itineraries[0]['segments'][count($itineraries[0]['segments']) - 1]['arrival'];
			$airCraft1 = $segments['aircraft']['code'];
			$totalduration = $this->getDuration($dataArr['itineraries'][0]['duration']);
			$Depature_duration = $this->getDuration($segments['duration']);
			
			$SegmentData = array();
			$return_SegmentData = array();

			for ($c = 0; $c < count($itineraries[0]['segments']); $c++) {
				$OWArr = $itineraries[0]['segments'][$c];

				$duration1 =  $this->getDuration($OWArr['duration']);
				$fly_duration = floor($duration1 / 60) . 'h ' . ($duration1 % 60) . 'm';
				$baggage = '';
				if (isset($dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weight'])) {
					$weight = $dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weight'];
					$baggage .= " Weight : " . $weight;
				}

				if (isset($dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weightUnit'])) {
					$weightUnit = $dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weightUnit'];
					$baggage .= " Unit : " . $weightUnit;
				}
				if (isset($dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['quantity'])) {
					$quantity = $dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['quantity'];
					$baggage .= " Quantity : " . $quantity;
				}

				$arrivalTimeArr = strtotime($OWArr['arrival']['at']);
				$departureTimeArr = strtotime($OWArr['departure']['at']);

				//$data =array('timestamp'=>$timestamp,'time_zone'=>$time_zone);
				if(isset($OWArr['arrival']['terminal'])){ $terminal=$OWArr['arrival']['terminal']; }else { $terminal=''; }
				$SegmentData[] = array(
					'aTimeUTC' => $arrivalTimeArr,
					'aTimeUTC_TimeZone' => $arrivalTimeArr,
					'arrival_day' => date('d', $arrivalTimeArr),
					'arrival_month' => date('M', $arrivalTimeArr),
					'arrival_time' => date('H:i', $arrivalTimeArr),
					'arrival_date' => date('Y-m-d', $arrivalTimeArr),
					'arrival_date_time' => date('Y-m-d\TH:i:s', $arrivalTimeArr),
					'aTimeActual' => $OWArr['arrival']['at'],

					'dTimeUTC' => $departureTimeArr,
					'dTimeUTC_TimeZone' => $departureTimeArr,
					'departure_day' => date('d', $departureTimeArr),
					'departure_month' => date('M', $departureTimeArr),
					'departure_time' => date('H:i', $departureTimeArr),
					'departure_date' => date('Y-m-d', $departureTimeArr),
					'departure_date_time' => date('Y-m-d\TH:i:s', $departureTimeArr),
					'dTimeActual' => $OWArr['departure']['at'],

					'duration' => $duration1,
					'fly_duration' => $fly_duration,

					'flight_no' => $OWArr['number'],
					'airline' => $OWArr['carrierCode'],
					'cabinType' => $dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['cabin'],
					'airlineName' => $this->ailinecode($OWArr['carrierCode']),
					'origin_AirportName' => $this->airportAndcity($OWArr['departure']['iataCode'], 'airport'),
					'destination_AirportName' => $this->airportAndcity($OWArr['arrival']['iataCode'], 'airport'),
					'operating_carrier' => '',
					'NoOfSeatAvailable' => $numberOfBookableSeats,
					'flyFrom' => $OWArr['departure']['iataCode'],
					'flyTo' => $OWArr['arrival']['iataCode'],
					'cityFrom' => $this->airportAndcity($OWArr['departure']['iataCode'], 'city'),
					'cityTo' => $this->airportAndcity($OWArr['arrival']['iataCode'], 'city'),
					'countryFrom' => $countryFrom,
					'countryTo' => $countryTo,
					'destination_terminal' => $terminal,
					'adults' => $adults,
					'children' => $childs,
					'infants' => $infants,
					'infants2' => $infants2,
					'baggage' => $baggage,
					'Craft' => $OWArr['aircraft']['code']
				);
			}

			/*====#Return Data===*/
		if(isset($itineraries[1])){
			for ($c = 0; $c < count($itineraries[1]['segments']); $c++) {
							$Return_totalstops = (count($itineraries[1]['segments']) - 1);
							$Return_arrival = $itineraries[1]['segments'][count($itineraries[1]['segments']) - 1]['arrival'];
							$Return_segments = $itineraries[1]['segments'][0];
							
							$Return_Totaltime = $itineraries[1]['duration'];
							$returnStops = $Return_segments['numberOfStops'];
							$Return_departure = $Return_segments['departure'];
							$Return_duration = $this->getDuration($Return_Totaltime);
							$airCraft2 = $Return_segments['aircraft']['code'];
							$totalreturnduration = $this->getDuration($dataArr['itineraries'][1]['duration']);
				
				$OWArr = $itineraries[1]['segments'][$c];

				$duration1 =  $this->getDuration($OWArr['duration']);
				$fly_duration = floor($duration1 / 60) . 'h ' . ($duration1 % 60) . 'm';

				//echo 'In: '.$OWArr['duration'].' = '.$duration1.' = '.$fly_duration.'<br>';

				$baggage = 'Baggage Info = ';

				if (isset($dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weight'])) {
					$weight = $dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weight'];
					$baggage .= "Weight : " . $weight;
				}

				if (isset($dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weightUnit'])) {
					$weightUnit = $dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['weightUnit'];
					$baggage .= " Unit : " . $weightUnit;
				}
				if (isset($dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['quantity'])) {
					$quantity = $dataArr['travelerPricings'][0]['fareDetailsBySegment'][$c]['includedCheckedBags']['quantity'];
					$baggage .= "Quantity : " . $quantity;
				}

				$return_arrivalTimeArr = strtotime($OWArr['arrival']['at']);
				$return_departureTimeArr = strtotime($OWArr['departure']['at']);
				if(isset($OWArr['arrival']['terminal'])){ $terminal=$OWArr['arrival']['terminal']; }else { $terminal=''; }
				$return_SegmentData[] = array(
					'aTimeUTC' => $return_arrivalTimeArr,
					'aTimeUTC_TimeZone' => $return_arrivalTimeArr,
					'arrival_day' => date('d', $return_arrivalTimeArr),
					'arrival_month' => date('M', $return_arrivalTimeArr),
					'arrival_time' => date('H:i', $return_arrivalTimeArr),
					'arrival_date' => date('Y-m-d', $return_arrivalTimeArr),
					'arrival_date_time' => date('Y-m-d\TH:i:s', $return_arrivalTimeArr),
					'aTimeActual' => $OWArr['arrival']['at'],

					'dTimeUTC' => $return_departureTimeArr,
					'dTimeUTC_TimeZone' => $return_departureTimeArr,
					'departure_day' => date('d', $return_departureTimeArr),
					'departure_month' => date('M', $return_departureTimeArr),
					'departure_time' => date('H:i', $return_departureTimeArr),
					'departure_date' => date('Y-m-d', $return_departureTimeArr),
					'departure_date_time' => date('Y-m-d\TH:i:s', $return_departureTimeArr),
					'dTimeActual' => $OWArr['departure']['at'],

					'duration' => $duration1,
					'fly_duration' => $fly_duration,

					'flight_no' => $OWArr['number'],
					'airline' => $OWArr['carrierCode'],
					'cabinType' => $dataArr['travelerPricings'][0]['fareDetailsBySegment'][1]['cabin'],
					'airlineName' => $this->ailinecode($OWArr['carrierCode']),
					'origin_AirportName' => $this->airportAndcity($OWArr['departure']['iataCode'], 'airport'),
					'destination_AirportName' => $this->airportAndcity($OWArr['arrival']['iataCode'], 'airport'),
					'operating_carrier' => '',
					'NoOfSeatAvailable' => $numberOfBookableSeats,
					'flyFrom' => $OWArr['departure']['iataCode'],
					'flyTo' => $OWArr['arrival']['iataCode'],
					'cityFrom' => $this->airportAndcity($OWArr['departure']['iataCode'], 'city'),
					'cityTo' => $this->airportAndcity($OWArr['arrival']['iataCode'], 'city'),
					'countryFrom' => $countryFrom,
					'countryTo' => $countryTo,
					'destination_terminal' => $terminal,
					'baggage' => $baggage,
					'Craft' => $OWArr['aircraft']['code']
				);
			}
			$return_SegmentData =  json_encode($return_SegmentData);
			//$airline = $airCraft1 . array_merge($airCraft2);
		}else{
							$Return_totalstops = 0;
							$Return_departure ='';
							$Return_arrival ='';
							$Return_segments = '';
							$Return_Totaltime = '';
							$returnStops = '';
							$Return_duration = 0;
							$airCraft2 = '';
							$totalreturnduration = 0;
							$return_SegmentData='';
		}

			$farebase = array();

			for ($m = 0; $m < count($dataArr['travelerPricings']); $m++) {

				$TRPrice = $dataArr['travelerPricings'][$m];
				if ($TRPrice['travelerId'] == 1) {
					$totalperson = $adults;
				}
				if ($TRPrice['travelerId'] == 2) {
					$totalperson = $childrens;
				}
				if ($TRPrice['travelerId'] == 3) {
					$totalperson = $infants;
				}

				$farebase[] = array(
					'Currency' => $currency,
					'PassengerType' => $TRPrice['travelerId'],
					'PassengerCount' => $totalperson,
					'BaseFare' => round($TRPrice['price']['total']),
					'Tax' => '0',
					'YQTax' => '0'
				);
			}
			$SegmentData = json_encode($SegmentData);
			

			$fare_currency = $price['currency'];

			$flight_price = round($price['grandTotal']);
			$flight_price = $flight_price;
						
			$without_discount_price =round($price['grandTotal']);

			$departureTimeArr = strtotime($departure['at']);
			$arrivalTimeArr = strtotime($arrival['at']);

			if (isset($Return_departure['at'])) {
				$return_departureTimeArr = strtotime($Return_departure['at']);
			} else {
				$return_departureTimeArr = 0;
			}
			if (isset($Return_arrival['at'])) {
				$return_arrivalTimeArr = strtotime($Return_arrival['at']);
			} else {
				$return_arrivalTimeArr = 0;
			}
			 $airline='';
						$data=array( 
							 'onewayFlights'=>$SegmentData,
			                 'returnFlights'=>$return_SegmentData,
							 'price'=>$flight_price,
							 'actual_price'=>$price['grandTotal'],
							 'without_discount_total'=>$without_discount_price,
							 'currency'=>$currency,
							 'api_currency'=>$api_currency,
							 'is_direct'=>0,
							 'validating_carrier'=>$validatingAirlineCodes[0],
							 'return_validating_carrier'=>$return_validating_carrier,
							 'max_stops'=>$Dep_totalstops,
							 'return_max_stops'=>$Return_totalstops,
							 'origon_airport'=>$From_IATACODE,
							 'destination_airport'=>$To_IATACODE,
							 'cityFrom'=>$From_IATACODE,
							 'cityTo'=>$To_IATACODE,
							 'countryFrom'=>$countryFrom,
							 'countryTo'=>$countryTo,
							 'departure_datetime'=>$departureTimeArr,
							 'arrival_datetime'=>$arrivalTimeArr,
							 'return_departure_datetime'=>$return_departureTimeArr,
							 'return_arrival_datetime'=>$return_arrivalTimeArr,
							 'total_duration'=>$totalduration,
							 'r_total_duration'=>$totalreturnduration,
							 'departure_duration'=>$Depature_duration,
							 'return_duration'=>$Return_duration,
							 'booking_token'=>$TokenId,
							 'seat_available'=>$numberOfBookableSeats,
							 'airlines'=>$airline,
							 'is_return'=>$is_return,
							 'baglimit'=>json_encode($fareDetailsBySegment),
							 'IsLCC'=>$isLCC,
							 'search_id'=>$search_id,
							 'total_response'=>json_encode($dataArr),
                             'FareBreakdown'=>json_encode($farebase),
							 'adults' => $adults,
							'children' => $childs,
							'infants' => $infants,
							'infants2' => $infants2,
							 'datetime'=>date('Y-m-d H:i:s')
						);
				$value = Crud_Model::insertData('amedeus_flight_results',$data);

		}
			$flag = 1;
		} else { print_r($headers); echo $contents; $flag = 0; }
				
		return $flag;
			
	}// Flight SearchRequest end
	
	public	function getDuration($duration_str)
	{
		$duration_str =  str_replace('PT', '', $duration_str);
		if (strpos($duration_str, 'H') !== false) {
			$duration_str = str_replace('H', '-', $duration_str);
			$duration_str = str_replace('M', '', $duration_str);
			$durationArr = explode('-', $duration_str);
			$hour = $durationArr[0];
			$minute = $durationArr[1];
		} else {
			$hour = 0;
			$minute = str_replace('M', '', $duration_str);
		}
		$duration = intval(($hour * 60)) + intval($minute);
		return $duration;
	}
	
	
	
	public function Show_Flights(Request $request) 
    {
	$search_id =trim($request['search_id']); 
	
	$limit =20;
	if(($request["page"]<=1) || ($request["page"]=='')){
		$page = 0;
	}else{
		$page = ( ($request["page"]-1) * $limit);
	}
	$sortValArr=explode('_',$request["sortVal"]);
	
	$orderBy=' order by '.$sortValArr[0].' '.$sortValArr[1];
	$moreQuery=" where search_id='".$search_id."' ";
	
	if($request['price']!=''){
		$price =str_replace(' ','',$request['price']);
		$priceArr =explode('-',$price);
		$minPrice =$priceArr[0];
		$maxPrice =$priceArr[1];
		$moreQuery.= " AND (price >= ".$minPrice." AND price<=".$maxPrice.")";
	} 
	//echo "_REQUEST['duration']==".$_REQUEST['duration'];
	if($request['duration']!=''){
		$duration =str_replace(array(':00',' '),array('',''),$request['duration']);
		$dExp =explode('-',$duration);
		$moreQuery.= " AND ( departure_duration >= '".($dExp[0]*60)."' AND departure_duration <='".($dExp[1]*60)."') ";  
	}
	
    if($request['Stops']!=''){
	$Stops=substr($request['Stops'],0,-1);
	  $moreQuery.= ' and max_stops IN('.$Stops.')'; 
	}
	
	$airlines=substr($request['airlines'],0,-1); $airline=$airlines;
	$Cri_airlines =explode(",",$request['airlines']); 
	$Cri_airlines =array_filter($Cri_airlines);
	if(count($Cri_airlines)>0) {
	 $moreQuery.= " AND validating_carrier IN (";	
	 $airLineStr ='';
	foreach($Cri_airlines as $v){   
	  $airLineStr.= " '".$v."',"; 	 
	 }
	 $airLine =substr($airLineStr,0,-1);
	 
	 $moreQuery.=$airLine;
	 $moreQuery.= " )";   
	}
	
	$res =DB::select("select count(*) as totalcount from amedeus_flight_results ".$moreQuery." ");
	$totalcount = $res[0]->totalcount;
		
	 $Sqls = "select * from amedeus_flight_results ".$moreQuery."  ".$orderBy." LIMIT ".$page.", $limit";
	//echo $Sqls;
	$results=DB::select($Sqls);
	$flightData=array();
    foreach($results as $Objs){ 	 
        $onewayFlights =json_decode($Objs->onewayFlights);	
        $returnFlights =json_decode($Objs->returnFlights);	
		if($returnFlights!='' ){ $isReturn='Yes'; } else { $isReturn='No';}
		
	    $fly_duration = floor($Objs->departure_duration/60).': '.floor(($Objs->departure_duration)%60);
	    $return_duration =floor($Objs->return_duration/60).': '.floor(($Objs->return_duration)%60);
		
		$bagData =json_decode($Objs->baglimit);	
		$bags_price =json_decode($Objs->bags_price);	
		$FareBreakdown =json_decode($Objs->FareBreakdown,true);
		
		$airlines =json_decode($Objs->airlines);
		$airLineData =array();
		/*foreach($airlines as $airlinecode){
		  $airResults =$wpdb->get_results("select * from kw_airlines WHERE airline_code='".$airlinecode."'");	
		  $airObj =$airResults[0];
		  $airLineData[]=array('airline_name'=>$airObj->name,'airline_code'=>$airlinecode);
		}*/
        
		$flightData['result'][] =array('totalcountfilter'=>$totalcount,'onewayFlights'=>$onewayFlights,'returnFlights'=>$returnFlights,'actual_price'=>$Objs->actual_price,'price'=>number_format($Objs->price,2, '.', ''),'IsLCC'=>$Objs->IsLCC,'is_direct'=>$Objs->is_direct,'IsRefundable'=>$Objs->IsRefundable,'validating_carrier'=>$Objs->validating_carrier,
		'return_validating_carrier'=>$Objs->return_validating_carrier,
		'departure_date'=>date('Y-m-d',$Objs->departure_datetime),
		'departure_datekk'=>date('Y-m-d',$Objs->departure_datetime),
		'departure_time'=>date('H:i',$Objs->departure_datetime),
		'arrival_date'=>date('Y-m-d',$Objs->arrival_datetime),
		'arrival_time'=>date('H:i',$Objs->arrival_datetime),
		
		'return_departure_date'=>date('Y-m-d',$Objs->return_departure_datetime),
		'return_departure_time'=>date('H:i',$Objs->return_departure_datetime),
		'return_arrival_date'=>date('Y-m-d',$Objs->return_arrival_datetime),
		'return_arrival_time'=>date('H:i',$Objs->return_arrival_datetime),
		
		'total_duration'=>$Objs->departure_duration,
		'fly_duration'=>$fly_duration,

		'return_total_duration'=>$return_duration,
		'origon_airport'=>$Objs->origon_airport,
		'destination_airport'=>$Objs->destination_airport,
		'max_stops'=>$Objs->max_stops,
		'return_max_stops'=>$Objs->return_max_stops,
		'booking_token'=>$Objs->booking_token,
		'airLineData'=>$Objs->total_response,
		'search_id'=>$Objs->search_id,
		'id'=>$Objs->id,
		'FareBreakup'=>json_decode($Objs->FareBreakdown,true),
		'bags_price'=>json_decode($Objs->bags_price),
		'bagData'=>json_decode($Objs->baglimit),
		'isLCC'=>$Objs->IsLCC,
		'currency_symbol'=>'$',
		'isReturn'=>$isReturn,
		);		  
	  }
	echo json_encode($flightData); 
	}// Show_flight end
	
	
	public function FlightController(Request $request) 
    {
	$search_id =trim($request['search_id']); 
	
	$modeQuery ='';
	/*=== Stopage ===*/	
	$stopesSql =DB::select("select distinct max_stops from amedeus_flight_results  where search_id='".$search_id."' $modeQuery ORDER BY max_stops ASC");
	$stopages=array();
	foreach($stopesSql as $stopesObj){
	 $resultsstop= DB::select("select  count(max_stops) as maxstopcount from amedeus_flight_results where max_stops='".$stopesObj->max_stops."' and search_id='".$search_id."' $modeQuery "); 
	 $maxstopcount=$resultsstop[0]->maxstopcount;
	 $stopages[] =array('max_stops'=>$stopesObj->max_stops,'maxstopcount'=>$maxstopcount);   
	}
	
	/*=== Airline ===*/
	 $airlines =array();
     $airlineSql=DB::select("select distinct validating_carrier from amedeus_flight_results where search_id='".$search_id."' $modeQuery");
	 foreach($airlineSql as $airline ){ 
		$results=DB::select("select * from airlines where thumbnail like '%".$airline->validating_carrier."%'");		    
		$conResults = DB::select("select count(*) as carriercount  from amedeus_flight_results WHERE validating_carrier='".$airline->validating_carrier."' and search_id='".$search_id."' $modeQuery");
		$airlines[]=array('airline_code'=>str_replace('.png','',$results[0]->thumbnail),'name'=>$results[0]->name,'carriercount'=>$conResults[0]->carriercount); 
	  }
       $sql="select count(*) as total,origon_airport,destination_airport,airlines,MIN(price) as minprice, MAX(price) as maxprice,MIN(departure_datetime) as departure_mintime,MAX(departure_datetime) as departure_maxtime,MIN(arrival_datetime) as arrival_mintime,MAX(arrival_datetime) as arrival_maxtime,MIN(return_departure_datetime) as return_departure_mintime,MAX(return_departure_datetime) as return_departure_maxtime,MIN(return_arrival_datetime) as return_arrival_mintime,MAX(return_arrival_datetime) as return_arrival_maxtime,MIN(departure_duration) as fly_duration_mintime,MAX(departure_duration) as fly_duration_maxtime,MIN(return_duration) as returnfly_duration_mintime, MAX(return_duration) as returnfly_duration_maxtime,(select count(*) from amedeus_flight_results where search_id='".$search_id."' and IsRefundable=1 $modeQuery) as refundableCount,(select count(*) from amedeus_flight_results where search_id='".$search_id."' and IsRefundable=0 $modeQuery) as non_refundableCount,(select count(*) from amedeus_flight_results where search_id='".$search_id."' and IsLCC=1) as LccCount,(select count(*) from amedeus_flight_results where search_id='".$search_id."' and IsLCC=0) as non_LccCount from amedeus_flight_results where search_id='".$search_id."' $modeQuery group by origon_airport,destination_airport,airlines ";
	$results =DB::select($sql);
		 
	$obj =$results[0];   
	
    $data =array('total'=>$obj->total,'minprice'=>floor($obj->minprice),'maxprice'=>ceil($obj->maxprice),'departure_mintime'=>floor(date('H',$obj->departure_mintime)),'departure_maxtime'=>ceil(date('H',$obj->departure_maxtime)),'arrival_mintime'=>floor(date('H',$obj->arrival_mintime)),'arrival_maxtime'=>floor(date('H',$obj->arrival_maxtime)),'return_departure_mintime'=>floor($obj->return_departure_mintime/60),'return_departure_maxtime'=>ceil($obj->return_departure_maxtime/60),'return_arrival_mintime'=>floor($obj->return_arrival_mintime/60),'return_arrival_maxtime'=>floor($obj->return_arrival_maxtime/60),'origon_airports'=>$obj->origon_airport,'destination_airports'=>$obj->destination_airport,'min_stop_duration'=>$obj->fly_duration_mintime,'max_stop_duration'=>$obj->fly_duration_maxtime,'fly_duration_mintime'=>floor($obj->fly_duration_mintime/60),'fly_duration_maxtime'=>ceil($obj->fly_duration_maxtime/60),'returnfly_duration_mintime'=>floor($obj->returnfly_duration_mintime/60),'returnfly_duration_maxtime'=>floor($obj->returnfly_duration_maxtime/60),'stopages'=>$stopages,'products'=>'Flight','refundableCount'=>$obj->refundableCount,'non_refundableCount'=>$obj->non_refundableCount,'LccCount'=>$obj->LccCount,'non_LccCount'=>$obj->non_LccCount,'airlines'=>$airlines,'airbaggages'=>'','currency_symbol'=>$this->currency_symbol);
   echo json_encode($data);
   
   }// FlightController end
	
	
	
	public function SelectFlight(Request $request) {
		$flightData= crud_model::readOne('amedeus_flight_results',array('id'=>$request->input('tid'))); 
		$TokenId=$flightData->booking_token;
		$total_response=$flightData->total_response;
		$total_responseArr[]=json_decode($total_response,true);
			$postdata['data'] =array('type'=>'flight-offers-pricing','flightOffers'=>$total_responseArr);
			$actionUrl=$this->booking_endpoint.'/shopping/flight-offers/pricing';
			$URL = $actionUrl;
			$headers=array('Content-Type: application/json','Accept: application/json','Authorization: Bearer '.$TokenId);
			json_encode($postdata);			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $actionUrl);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json','Authorization: Bearer '.$TokenId));
			$contents = curl_exec($ch);
			
			$this->createLogFile('check-price',$URL.'\r\nHeader='.json_encode($headers).'\r\nRequest='.json_encode($postdata),$contents);
			$Response=json_decode($contents,true);
			
			$data=array(
			'search_id'=>$flightData->search_id,
			'ref_id'=>$flightData->id,
			'IsLCC'=>0,
			'IsDomestic_Return'=>0,
			'TokenId'=>$TokenId,
			'request'=>json_encode($postdata),
			'response'=>$contents,
			'date_time'=>date('Y-m-d H:i:s')
			);
			$value = Crud_Model::insertData('amadeus_flight_fareQuote',$data);
			if(isset($Response['errors'])){ echo json_encode($Response['errors'][0]); }
			else{ echo $contents; }
	}


	public function FlightFinalCheckout(Request $request) 
    {
		$request_data=array();
		$request_data=$request->input();
		$flightData= crud_model::readOne('amedeus_flight_results',array('id'=>$request->input('ref_id'))); 
		$adult=$flightData->adults;
		$children=$flightData->children;
		$infant=$flightData->infants;
		
		if($flightData->is_return==0){ $isoneway='Yes'; } else{ $isoneway='No';  }
		$flight_check=crud_model::readOne('amadeus_flight_fareQuote',array('ref_id'=>$request->input('ref_id'))); 
		$flight_check_response=$flight_check->response;
		
		$flight_check_responseArr=json_decode($flight_check->response,true);
						
		$adultsPax=$request_data['passenger']['adult'];  
		if(isset($request_data['passenger']['child'])){ $childrenPax=$request_data['passenger']['child']; } else{ $childrenPax=array(); }
		if(isset($request_data['passenger']['infant'])){ $infantsPax=$request_data['passenger']['infant']; } else{ $infantsPax=array(); }
		$total_amount=$flightData->actual_price;
		$total_currency=$flightData->api_currency;
		
	$response = json_decode($flight_check->response, true);
	$Results = $response['data']['flightOffers'][0];
	$travelerPricings = $Results['travelerPricings'][0]['travelerId'];
	$flightoffer = array();
	$flightoffer[0] = $Results;
	$booking_token = $flight_check->TokenId;
	
	$ext_phone=$request_data['passenger']['ext_phone'];
	$homePhone=$request_data['passenger']['phone'];

	$ContactPhones[] = array('deviceType' => 'MOBILE', 'countryCallingCode' => $ext_phone, 'number' => $homePhone);
	$General[0] = array('subType' => 'GENERAL_MISCELLANEOUS', 'text' => 'ONLINE BOOKING FROM INCREIBLE VIAJES');
	$TicketingAgreement = array('option' => 'DELAY_TO_CANCEL', 'delay' => '6D');
	
	$Contacts[0] = array(
		'addresseeName' => array('firstName' => $adultsPax['first_name'][0], 'lastName' => $adultsPax['last_name'][0]),
		'companyName' => 'fareorbitz',
		'purpose' => 'STANDARD',
		'phones' => $ContactPhones,
		'emailAddress' => $request_data['passenger']['email'],
		'address' => array('lines' => array($request_data['passenger']['address']), 'postalCode' => $request_data['passenger']['postalCode'], 'cityName' => $request_data['passenger']['city'], 'countryCode' => $request_data['passenger']['country'])
	);
		
		
		if ($adult > 0) {
			for ($a = 0; $a < $adult; $a++) {
				$PhoneData = array();
				$documentsAdult = array();
	
				if ($adultsPax['passport_number'][$a] == '') {
					$adultsPax['passport_number'][$a] = '885910552652';
					$adultsPax['passport_expiry'][$a] = '2023-06-25';
				}
	
				$PhoneData[] = array('deviceType' => 'MOBILE', 'countryCallingCode' => $ext_phone, 'number' => $homePhone);
	
				$documentsAdult[] = array('documentType' => 'PASSPORT', 'birthPlace' => $request_data['passenger']['city'], 'issuanceLocation' => $request_data['passenger']['city'], 'issuanceDate' => '2020-02-15', 'number' => $adultsPax['passport_number'][$a], 'expiryDate' => $adultsPax['passport_expiry'][$a], 'issuanceCountry' => $request_data['passenger']['country'], 'validityCountry' => $request_data['passenger']['country'], 'nationality' => $request_data['passenger']['country'], 'holder' => true);
	
				$adultsDOB = $adultsPax['dob'][$a];
	
				$Gender = "MALE";
				if (($adultsPax['title'][$a] == 'Ms') || ($adultsPax['title'][$a] == 'Mrs') || ($adultsPax['title'][$a] == 'Miss')) {
					$Gender = "FEMALE";
				}
	
				$Passengers[] = array('id' => strval($a + $travelerPricings), 'dateOfBirth' => $adultsDOB, 'name' => array('firstName' => $adultsPax['first_name'][$a], 'lastName' => $adultsPax['last_name'][$a]), 'gender' => $Gender, 'contact' => array('emailAddress' => $request_data['passenger']['email'], 'phones' =>$PhoneData), 'documents' => $documentsAdult);
			}
		}
	
		if ($children > 0) {
			for ($a = 0; $a < $children; $a++) {
	
				$phone = array();
				$documentsChild = array();
	
				if ($childrenPax['passport_number'][$a] == '') {
					$childrenPax['passport_number'][$a] = '885910552652';
					$childrenPax['passport_expiry'][$a] = '2023-06-25';
				}
	
				if ($childrenPax['dob_date'][$a] <= 9) {
					$travellerDate  = '0' . $childrenPax['dob_date'][$a];
				} else {
					$travellerDate  = $childrenPax['dob_date'][$a];
				}
	
				$phone[] = array('deviceType' => 'MOBILE', 'countryCallingCode' => $ext_phone, 'number' => $homePhone);
	
				$documentsChild[] = array('documentType' => 'PASSPORT', 'birthPlace' => $city, 'issuanceLocation' => $city, 'issuanceDate' => '2020-02-15', 'number' => $childrenPax['passport_number'][$a], 'expiryDate' => $childrenPax['passport_expiry'][$a], 'issuanceCountry' => $request_data['passenger']['country'], 'validityCountry' => $request_data['passenger']['country'], 'nationality' => $request_data['passenger']['country'], 'holder' => true);
	
				$childrensDOB = $childrenPax['dob_year'][$a] . "-" . $childrenPax['dob_month'][$a] . "-" . $travellerDate;
	
				$Gender = "MALE";
				if (($childrenPax['title'][$a] == 'Ms') || ($childrenPax['title'][$a] == 'Mrs') || ($childrenPax['title'][$a] == 'Miss')) {
					$Gender = "FEMALE";
				}
	
				$PaxChdCount = count($adultsPax['first_name']) + $a + $travelerPricings;
	
				$Passengers[] = array('id' => strval($PaxChdCount), 'dateOfBirth' => $childrensDOB, 'name' => array('firstName' => $childrenPax['first_name'][$i], 'lastName' => $childrenPax['last_name'][$a]), 'gender' => $Gender, 'contact' => array('emailAddress' => $email_id, 'phones' => $phone), 'documents' => $documentsChild);
			}
		}
	
		if ($infant > 0) {
			for ($a = 0; $a < $infant; $a++) {
				$phone = array();
				$documentsinfants = array();
	
				if ($infantsPax['passport_number'][$a] == '') {
					$infantsPax['passport_number'][$a] = '885910552652';
					$infantsPax['passport_expiry'][$a] = '2023-06-25';
				}
	
				if ($infantsPax['dob_date'][$a] <= 9) {
					$travellerDate  = '0' . $infantsPax['dob_date'][$a];
				} else {
					$travellerDate  = $infantsPax['dob_date'][$a];
				}
	
				$phone[] = array('deviceType' => 'MOBILE', 'countryCallingCode' => $ext_phone, 'number' => $homePhone);
	
				$documentsinfants[] = array('documentType' => 'PASSPORT', 'birthPlace' => $city, 'issuanceLocation' => $city, 'issuanceDate' => '2018-02-15', 'number' => $infantsPax['passport_number'][$a], 'expiryDate' => $infantsPax['passport_expiry'][$a], 'issuanceCountry' => $request_data['passenger']['country'], 'validityCountry' => $request_data['passenger']['country'], 'nationality' => $request_data['passenger']['country'], 'holder' => true);
	
	
				$infantsDOB = $infantsPax['dob_year'][$a] . "-" . $infantsPax['dob_month'][$a] . "-" . $travellerDate;
	
				$Gender = "MALE";
				if (($infantsPax['title'][$a] == 'Ms') || ($infantsPax['title'][$a] == 'Mrs') || ($infantsPax['title'][$a] == 'Miss')) {
					$Gender = "FEMALE";
				}
	
				$PaxInfCount = count($adultsPax['first_name']) + count($childrenPax['first_name']) + $a + $travelerPricings;
	
				$Passengers[] = array('id' => strval($PaxInfCount), 'dateOfBirth' => $infantsDOB, 'name' => array('firstName' => $infantsPax['first_name'][$a], 'lastName' => $infantsPax['last_name'][$a]), 'gender' => $Gender, 'contact' => array('emailAddress' => $email_id, 'phones' => $phone), 'documents' => $documentsinfants);
			}
		}

	$postdata = array('type' => 'flight-order', 'flightOffers' => $flightoffer, 'travelers' => $Passengers, 'remarks' => array('general' => $General), 'ticketingAgreement' => $TicketingAgreement, 'contacts' => $Contacts);
		
		$book_request=array('data'=>$postdata);
		$user_id=session()->get('user_id');
		
		if($user_id==''){
			//$user_id=$this->createUser($adultsPax['first_name'][0],$adultsPax['last_name'][0],$request_data['passenger']['email'],$request_data['passenger']['phone'],$request_data['passenger']['address'],$request_data['passenger']['city'],$request_data['passenger']['country']);
		}

		$order_id=strtoupper(uniqid());
		$data=array(
		'order_id'=>$order_id,
		'search_id'=>$flight_check->search_id,
		'ref_id'=>$flight_check->id,
		'TokenId'=>$flight_check->TokenId,
		'first_name'=>$adultsPax['first_name'][0],
		'last_name'=>$adultsPax['last_name'][0],
		'email'=>$request_data['passenger']['email'],
		'phone'=>$request_data['passenger']['phone'],
		'address'=>$request_data['passenger']['address'],
		'travellers'=>json_encode($Passengers),
		'onewayFlights'=>$flightData->onewayFlights,
		'returnFlights'=>$flightData->returnFlights,
		'prices'=>$flightData->price,
		'card_holder_name'=>$request_data['passenger']['card_holder_name'],
		'card_number'=>$request_data['passenger']['card_number'],
		'card_expiry_month'=>$request_data['passenger']['card_expiry_month'],
		'card_expiry_year'=>$request_data['passenger']['card_expiry_year'],
		'card_cvv'=>$request_data['passenger']['card_cvv'],  
		'payment_status'=>'Pending',
		'booking_status'=>'Pending',
		'book_request'=>json_encode($book_request),
		'adults'=>$flightData->adults,
		'children'=>$flightData->children,
		'infants'=>$flightData->infants,
		'infants2'=>$flightData->infants2,
		'created_at'=>date('Y-m-d H:i:s')
		);
		$value = Crud_Model::insertData('bookings',$data);

		//return redirect('/flight-payment/'.base64_encode($order_id)."/".base64_encode($request_data['chargeableRate']));	
		return redirect('/book-flight/?order_id='.$order_id.'&payment_status=Confirmed');		
	}
	
	//  Final Checkout end
	
	//  Book Flight Start 
	public function BookFlight(Request $request){	
	   $request_data=$request->input('');  
	   $order_id=$request->input('order_id');
	   $payment_status=$request->input('payment_status');
	   $confirmation_page=$request->input('confirmation_page');
	   if($payment_status=='Confirmed'){
			$flight_book_req=crud_model::readOne('bookings',array('order_id'=>$request->input('order_id')));
			$book_request=$flight_book_req->book_request;
			$TokenId=$flight_book_req->TokenId;
			$actionUrl=$this->booking_endpoint.'/booking/flight-orders';
			$headers=array('Content-Type: application/json','Accept: application/json','Authorization: Bearer '.$TokenId);


			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $actionUrl);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $book_request);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json','Authorization: Bearer '.$TokenId));
			$contents = curl_exec($ch);
			curl_close($ch);
			
			$this->createLogFile('book-flight',$actionUrl.'\r\nHeader='.json_encode($headers).'\r\nRequest='.$book_request,$contents);
			$Response=json_decode($contents,true);
	
			$response_data = json_decode($contents, true);
			if (isset($response_data['errors'])) {
				$data=array(
				'pnr'=>'',  
				'payment_status'=>'Confirmed',
				'booking_status'=>'Failed',  
				'error_msg'=>$response_data['errors'],
				'book_response'=>$contents,
				'updated_at'=>date('Y-m-d H:i:s')
				);
				$value = Crud_Model::updateData('bookings',$data,array('order_id'=>$order_id));
			}
			else{
				$pnr_number = $response_data['data']['associatedRecords'][0]['reference'];
				$PNR = $pnr_number;
				if(isset($response_data['data']['associatedRecords'][1]['reference'])){
					$return_pnr_number = $response_data['data']['associatedRecords'][1]['reference'];
					$PNR = $pnr_number . '/' . $return_pnr_number;
				}
	
				$data=array(
				'pnr'=>$PNR,  
				'payment_status'=>'Confirmed',
				'booking_status'=>'Confirmed',
				'book_response'=>$contents,
				'updated_at'=>date('Y-m-d H:i:s')
				);
				$value = Crud_Model::updateData('bookings',$data,array('order_id'=>$order_id));
			}		
	}else{
				$data=array(
				'pnr'=>'',  
				'payment_status'=>'Failed',
				'booking_status'=>'Failed',  
				'error_msg'=>'Payment Failed',
				'book_response'=>'',
				'updated_at'=>date('Y-m-d H:i:s')
				);
				$value = Crud_Model::updateData('bookings',$data,array('order_id'=>$order_id));
	}
	return redirect('/flight-confirmation/'.base64_encode($order_id));
}
	//  Book Flight end
	
	
	public  function Check(Request $request){
			echo "price===".$this->convertCurrencyRateFlight('USD',100);
		}
		
	//  create user start
	public function createUser($first_name,$last_name,$email,$phone,$address,$city,$country){
		$obj= crud_model::readOne('user',array('email'=>$email)); 

		if(!is_object($obj)){
			$password=rand();
			$data=array(
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'phone'=>$phone,
				'email'=>$email,
				'password'=>$password,
				'address'=>$address,
				'city'=>$city,
				'country'=>$country,
				'user_type'=>'customer',
				'status'=>'active',
				'date_time'=>date('Y-m-d H:i:s')
			);
			$value = Crud_Model::insertData('user',$data);
			$this->UserCreateMailSend($email,$password,$first_name);
			return DB::getPdo()->lastInsertId();
		}else{ return $obj->id; }
	}
	//  create user end		
	
	public function convertCurrencyRateFlight($from,$price){
	$to=$this->currency;
		$usdRate =1;
		if($from!=$to){  
			//$currObj=$this->crud_model->customQuery($from,$to);
			$currObj = DB::select("select rate as fromRate, (select rate from  currency_rates where `currency`='".$to."')  as toRate  from currency_rates where `currency`='".$from."'");
			
			$fromRate =$currObj[0]->fromRate; 
			$toRate =$currObj[0]->toRate;
			if($usdRate>$fromRate){
			 $usdPrice =($price*$fromRate);	
			}else{
			 $usdPrice =($price/$fromRate);	
			}
			$price =($usdPrice*$toRate);
		}
		return $price;
	}
	
	
	public function createLogFile($action,$request,$response){  
		$credentials=$this->ClientId."-".$this->client_secret; 
		$file_name =$action.'-'.date('dmy his');	
		$log_filename = "travel/LogFile"; 
		if (!file_exists($log_filename)) {  
			mkdir($log_filename, 0777);  
		}   
		$log_file_data = $log_filename.'/'.$file_name.'.txt';
		
		$log_data ="===========Credentials($action)========="."\r\n";
		$log_data.=$credentials."\r\n";
		$log_data.="===========Request($action)========="."\r\n";
		$log_data.=$request."\r\n";
		$log_data.="===========Response($action)========="."\r\n";
		$log_data.=$response."\r\n";
		
		file_put_contents($log_file_data, $log_data . "\r\n", FILE_APPEND);
	}
	
	public function UserCreateMailSend($email,$password,$name){  
	
		$content ='<h3>Hi '.$name.'</h3><br>';
		
		$content .='<h5>Your Profile Create During Booking on our Site.Following Are Your Login Details.You Can use it for Manage Your Booking and New Booking.</h5><br>';
 
		$content .='<p>Username: '.$email.'</p><br>';
		$content .='<p>Password: '.$password.'</p><br>';
		$content .='<p>Thank You</p><br>';
		$subject="New User Creation (".$email.")";

		$to = "bhai.kumaramit@gmail.com,".$email.",info@akmtechie.in";
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: <techieakm@gmai.com>' . "\r\n";
		$headers .= 'Cc: amit4comp@gmail.com' . "\r\n";
		mail($to,$subject,$content,$headers);
	}
	
	public function unique_key($array,$keyname){

	 $new_array = array();
	 foreach($array as $key=>$value){
	
	   if(!isset($new_array[$value[$keyname]])){
		 $new_array[$value[$keyname]] = $value;
	   }
	
	 }
	 $new_array = array_values($new_array);
	 return $new_array;
	}
	
	public function ailinecode($airlineid)
	{
    	$results=DB::select("select * from airlines where thumbnail like '%".$airlineid."%' ");
		$result = $results[0];
		$data = $result->name;
		return $data;
	}
	
	public function airportAndcity($iata, $type)
	{
		global $wpdb;
		$results=DB::select("select name from airports where code='" . $iata . "'");
		$result = $results[0];
		$return = $result->name;
		return $return;
	}
		
}




