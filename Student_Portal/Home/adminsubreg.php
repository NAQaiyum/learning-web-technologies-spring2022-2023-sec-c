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
    <title>Subreg</title>
</head>
<body>
    <center>
        <h1>Subject Registration</h1>
    </center>
    <br>

    <a href="editshow.php">Show All Subject</a><br>
    <a href="editsreg.php">Register Subject & Section</a><br>
     

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





