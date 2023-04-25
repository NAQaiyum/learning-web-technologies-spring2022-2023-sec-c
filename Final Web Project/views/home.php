<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>

<link rel="stylesheet" type="text/css" href="../css/home.css"><br><br><br>

<center><h1>Welcome home! <?=$_SESSION['username']?></h1></center><br><br>

<b>
<a href="about.php">About Us</a><br>
<a href="terms.php">Terms & Conditions</a><br>
<a href="parking.php">Parking Schedule</a><br>
<a href="thesis.php">Thesis</a><br>
<a href="subreg.php">Subject Registration</a><br></b>
<br>
<br>
<br>
<br>
<a href="../controllers/logout.php">Log out</a>


<?php
    }else{
        echo "invalid request, please login first...";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>