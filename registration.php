<?php
include 'config.php';
$sql="INSERT INTO members (username , password , mail , firstname , lastname)
 VALUES ($_post'[user]' ,$_post'[pass]' , $_post'[email]' , $_post'[firstname]' , $_post'[lastname]')";

 echo "1 person added";
 mysql_close($con);
  

?>
