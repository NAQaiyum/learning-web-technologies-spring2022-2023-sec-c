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
    <title>thesisverify</title>
</head>
<body>
    <center>
        <h1>Confirmation!!!</h1>
    </center>
    <br>
    <?php

    $file = fopen("applycon.txt","r");
    $data = fread($file , filesize("applycon.txt"));

    echo $data;
    fclose($file);
    ?>


    <br>
    <br>
    <a href="apply.php"> Back </a>


</body>
</html>

    <?php
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>





