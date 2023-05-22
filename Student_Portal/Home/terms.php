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
    <title>Terms</title>
</head>
<body>
    <center>
        <h1>Terms & Conditions</h1>
    </center>
    <br>

     <a href="general.php">General Terms</a><br>
     <a href="agreement.php">Agreement to terms</a><br>
    

    <br>
    <br>
    <a href="myhome.php"> Back </a>


</body>
</html>

    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>




