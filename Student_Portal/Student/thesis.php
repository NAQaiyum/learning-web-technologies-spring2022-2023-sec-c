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
    <title>Thesis</title>
</head>
<body>
    <center>
        <h1>Thesis Paper</h1>
    </center>
    <br>

     <a href="apply.php">Apply For Thesis</a><br>
     <a href="read.php">Read Publish Thesis</a><br>
    

    <br>
    <br>
    <a href="myhome.php"> Back </a>


</body>
</html>



