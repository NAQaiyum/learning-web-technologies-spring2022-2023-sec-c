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
    <title>Mission Page</title>
</head>
<body>
    <h1>Publish Paper 2</h1>
    <br>
    <?php

    $file = fopen("publish2.txt","r");
    $data = fread($file , filesize("publish2.txt"));

    echo $data;
    fclose($file);
    ?>

    <br>
    <br>
    <a href="read.php"> Back </a>
    
</body>
</html>