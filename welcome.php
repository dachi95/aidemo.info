
<?php
include ("css.html");
include ("check.php");



?>
<html>

<body background="images/bg.jpg">
<h1>hello<?php echo " ".$_SESSION['username'];?></h1>
<a href="todo.php" ><p> Todo List</p></a><br>
<a href="calc.php" ><p> Calculator</p> </a><br>
<a href="gpa.php" ><p> GPA </p></a><br>
<a href="logout.php" ><p> Log Out</p> </a><br>
<body>
</html>
