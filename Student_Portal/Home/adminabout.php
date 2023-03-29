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
    <title>About Us</title>
</head>
<body>
    <center>
        <h1>About us</h1>
    </center>
    <br>

     <a href="editmission.php">Mission</a><br>
     <a href="editvision.php">Vision</a><br>
     <a href="editpolicy.php">Policy</a><br>

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





