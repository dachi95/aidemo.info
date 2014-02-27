<?php 
$hostname = "localhost";
$username = "dachi";
$password = "trakshipalo";
$database = "dachi";

$con = mysql_connect($hostname, $username, $password) or die("OKI");
mysql_select_db($database, $con) or die("error2");




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
	
		 session_start();
                 $_SESSION['loggedin'] = true;
                 $_SESSION['username'] = $myusername;


		header("location: welcome.php");
		}
	else{echo "ERROR"; exit();} 


	}
}

?>
<html>
<body background="images/bg.jpg">
  <form action="" method="post" >
    <label>UserName :</label>
      <input type="text" name="username"/><br />
    <label>Password :</label>
      <input type="password" name="password"/><br/>
      <input type="submit" value=" Submit "/><br />
  </form>
</body>
</html>
