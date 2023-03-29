<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
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
<br>
<br>
<br>
<br>


<?php

if($_SESSION['username'] == "Admin"){
    echo "<center><h1>For Admin</h1></center>";
    ?>
    <br>
    

    <center><a href="editadmin.php">Make Any Changes</a></center>


    <?php

}
    }else{
        echo "Invalid request, Please login first...";
?>



<br>
<a href="login.php">Try again</a>

<?php
    }

?>
    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>


