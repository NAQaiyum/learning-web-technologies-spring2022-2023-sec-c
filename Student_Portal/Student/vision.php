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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Page</title>
</head>
<body>
    <h1>Vision</h1>
    <br>
    <?php

    $file = fopen("vision.txt","r");
    $data = fread($file , filesize("vision.txt"));

    echo $data;
    fclose($file);
    ?>
    <br>
    <br>
    <a href="about.php"> Back </a>
    
</body>
</html>