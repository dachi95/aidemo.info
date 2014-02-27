
<?php

$hostname = "localhost";
$username = "dachi";
$password = "trakshipalo";
$database = "dachi";

$con = mysql_connect($hostname, $username, $password) or die("OKI");
mysql_select_db($database, $con) or die("error2");


 $user = $_POST['username'];
 $pass = $_POST['password'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $mail = $_POST['mail'];
 
 $sql = "INSERT INTO members (username , password , mail , firstname , lastname)
VALUES ('$user' , '$pass' , '$mail' , '$firstname' , '$lastname') ";
if (!mysql_query($sql,$con)){
die('error' . " " . mysql_error($con));}
header ("location: index.html");
echo "1 record added";

mysql_close ($con);



?>