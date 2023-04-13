<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>About Us</h1>

<a href="mission.php">Mission</a><br>
<a href="vision.php">Vision</a><br>
<a href="policy.php">Policy</a><br>

<br>
<br>

<a href="../views/home.php">Back</a>


<?php
    }else{
        echo "invalid request, please login first...";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>