<?php



$con=mysqli_connect("localhost","u879316471_fareorbitz","007@Orbitz","u879316471_fareorbitz");



if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  exit;

}



mysqli_select_db($con, "u879316471_fareorbitz");



?>