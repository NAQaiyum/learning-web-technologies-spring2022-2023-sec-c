<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Parking Schedule</h1>

<a href="car.php">Car Parking Schedule</a><br>
<a href="bike.php">Bike Parking Schedule</a><br>


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