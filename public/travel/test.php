<?php 
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");

include('connection.php');
		$results =mysqli_query($con,"select * from amedeus_flight_results where id='".$_REQUEST['tid']."' ");
		$Objs =mysqli_fetch_object($results); 
		 $total_response=$Objs->total_response;
		 $TokenId=$Objs->booking_token;
		
		$total_responseArr[]=json_decode($total_response,true);
		
		$endpoint='https://api.amadeus.com/v1';
		//$endpoint="https://test.api.amadeus.com/v2";
			
			$postdata['data'] =array('type'=>'flight-offers-pricing','flightOffers'=>$total_responseArr);
			echo "actionUrl===".$actionUrl=$endpoint.'/shopping/flight-offers/pricing';
									
			echo "<pre>".json_encode($postdata);
			
			//$headers= array('Content-Type: application/vnd.amadeus+json', 'Authorization: Bearer '.$TokenId); 
			$headers= array('Content-Type: application/json,text/plain','Accept: */*','User-Agent: PostmanRuntime/7.29.2','Accept-Encoding: gzip, deflate, br','X-HTTP-Method-Override: GET','Authorization: Bearer '.$TokenId); 
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $actionUrl);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_ENCODING, "gzip");
			echo '<br>response='.$contents = curl_exec($ch);
			curl_close($ch);
			
			die;
				
		//$this->createLogFile('check-price',$URL.'\r\nHeader='.json_encode($headers).'\r\nRequest='.json_encode($postdata),$contents);
			$Response=json_decode($contents,true);
			
			if(isset($Response['errors'])){ echo json_encode($Response['errors'][0]); }
		



?>
		