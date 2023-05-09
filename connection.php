<?php
$server = "gator4133.hostgator.com";
$username = "willowb1_pokes";
$password = "Pokes-1023";
$db = "willowb1_car_inventory";

// $server = "localhost";
// $username = "pokes";
// $password = "Pokes-1023";
// $db = "car_inventory";


$con = mysqli_connect($server, $username, $password, $db);

if(!$con){
  die('Error in connecting to server or Database');
}
?>