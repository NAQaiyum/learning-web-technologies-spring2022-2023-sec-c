<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
    
}
else{
    
    header("refresh: 5 ; url =../Student/login.php");
    die("Please Login First");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
  <center>
    <h1>Admin Homepage</h1></center>
    <br>
    <ul>
    <li><a href="about.php">About us</a></li>
	  <li><a href="terms.php">Terms & Conditions</a></li>
    <li><a href="parking.php">Parking Schedule</a></li>
    <li><a href="thesis.php">Thesis</a></li>
    <li><a href="subreg.php">Subject Registration</a></li>
    </ul>

</body>
</html>
