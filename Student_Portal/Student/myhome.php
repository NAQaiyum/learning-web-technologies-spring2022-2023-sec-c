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
<?php 
    //session_start();
    if(isset($_COOKIE['flag'])){
?>



<h1>Welcome Homepage!!! <?=$_SESSION['username']?></h1>

<a href="about.php">About Us</a><br>
<a href="terms.php">Terms & Conditions</a><br>
<a href="parking.php">Parking Schedule</a><br>
<a href="thesis.php">Thesis</a><br>
<a href="subreg.php">Subject Registration</a><br>
<br>
<br>
<a href="logout.php">Log out</a>


<?php
    }else{
        echo "Invalid request, Please login first...";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>

