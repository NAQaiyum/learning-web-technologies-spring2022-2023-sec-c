<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub_Reg</title>
</head>
<body>
    <center>
        <h1>Subject Registration</h1>
    </center>
    <br>

     <a href="show.php">Show All Subject</a><br>
     <a href="sreg.php">Register Subject & Section</a><br>
    

    <br>
    <br>
    <a href="myhome.php"> Back </a>


</body>
</html>



