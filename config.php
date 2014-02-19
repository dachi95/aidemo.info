<?php 
$hostname = "localhost";
$username = "dachi";
$password = "trakshipalo";
$database = "dachi";

$con = mysql_connect($hostname, $username, $password) or die("OKI");
mysql_select_db($database, $con) or die("error2");
?>
