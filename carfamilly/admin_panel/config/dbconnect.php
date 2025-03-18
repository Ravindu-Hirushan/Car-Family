<?php

$server = "185.151.30.211";
$user = "adminpanel";
$password = "admin123";
$db = "adminpanel";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>