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
    <title>Bike Page</title>
</head>
<body>
    <h1>Bike Park Schedule</h1>
    <br>
    <?php

    $file = fopen("bike.txt","a");
    $data = "Parking has been done if you come first.\r\n";
    fwrite($file, $data);
   // echo "done!";

    echo $data;
    fclose($file);
    ?>

    <br>
    <br>
    <a href="adminparking.php"> Back </a>
    
</body>
</html>
    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>

