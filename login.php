<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$myusername=addslashes($_POST['username']);
	$mypassword=addslashes($_POST['password']);

		$sql="SELECT id FROM members WHERE username='$myusername' and password='$mypassword'";
		$result=mysql_query($sql);
		if($result){
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		if($count == 1) {
	
		session_register("myusername");
		$_SESSION['login_user']=$myusername;

		header("location: welcome.php");
		}
	else{echo "ERROR"; exit();} 


	}
}

?>
<html>
<form action="" method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
</form>
</html>
