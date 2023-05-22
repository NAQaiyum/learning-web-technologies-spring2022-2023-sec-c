<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
    ?>

<center>
<h1>Admin Homepage</h1>
</center>

<a href="adminabout.php">About Us</a><br>
<a href="adminterms.php">Terms & Conditions</a><br>
<a href="adminparking.php">Parking Schedule</a><br>
<a href="adminthesis.php">Thesis</a><br>
<a href="adminsubreg.php">Subject Registration</a><br>
<br>
<br>
<a href="myhome.php"> Back </a>

<br>
<br>


    

<?php
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>


