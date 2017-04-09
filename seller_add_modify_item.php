<?php

include("connection.php");

$eventName = $_GET['eventName1'];
$streetAddress = $_GET['street_address'];
$city = $_GET['city'];



echo $eventName;



mysqli_close($db);

?>