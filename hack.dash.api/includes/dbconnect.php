<?php 

$database="dash_hack";
$dbserver="DATABASE HOST";
$dbuser="DATABASE USERNAME";
$dbpassword="DATABASE PASSWORD";

$connect = mysqli_connect($dbserver,$dbuser,$dbpassword,$database) or die("Error while connecting to database");
