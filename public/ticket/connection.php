<?php
$con=mysqli_connect("localhost","u714508542_fareorbitz","]M12fYq78z2k","u714508542_fareorbitz_db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}
mysqli_select_db($con,"u714508542_fareorbitz_db");
?>