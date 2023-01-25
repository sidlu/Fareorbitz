<?php

$actionUrl='https://fareorbitz.indwebdesign.com/ticket/flight/flight.php?action=mail&order_id='.$_REQUEST['order_id'].'&rand='.rand().'&user_id=';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $actionUrl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));
		 echo $contents = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);

include('../connection.php');
   
	$content=$_REQUEST['content'];
	$subject=$_REQUEST['subject'];
	$to = "operations@fareorbitz.com, bhai.kumaramit@gmail.com, techieakm@gmai.com, pp.af99@gmail.com";
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <webmaster@example.com>' . "\r\n";
	$headers .= 'Cc: amit4comp@gmail.com' . "\r\n";
	echo  mail($to,$subject,$contents,$headers);
	echo "<br><br>".$contents;
 ?>













