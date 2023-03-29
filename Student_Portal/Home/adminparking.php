<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
</head>
<body>
    <center>
        <h1>Parking Schedule</h1>
    </center>
    <br>

    <a href="editcar.php">Car Parking Schedule</a><br>
    <a href="editbike.php">Bike Parking Schedule</a><br>
     

    <br>
    <br>
    <a href="editadmin.php"> Back </a>
    


</body>
</html>
    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>





