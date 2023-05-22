<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Dashboard</title>
</head>
<body>
<div class="bg">
    <div class="o">
    <?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Welcome home! <?=$_SESSION['username']?></h1> <br> <br>

            <!-- =========================Alvi Start================================================ -->
    
            <!-- All Notification -->
            <button onclick="loadNot()">Show All Notification</button>
                <table style="color:white" width="40%">
                    <tbody id="notify">
                        
                        </tbody>
                    </table>
            <!-- All Notification -->

            <a href="findUs.php">Find Us</a>
            <a href="contact.php">Contact Us</a> <br>
            <a href="viewFees.php">View tuition fees</a>
            <a href="view-results.php">Results</a><br>
            <a href="changeInfo.php">Update your Information</a><br> <br>
            <!-- =========================Alvi End================================================ -->
            
            <!-- =========================Nayeem Start================================================ -->
            <a href="about.php">About Us</a>
            <a href="terms.php">Terms & Conditions</a><br>
            <a href="parking.php">Parking Schedule</a>
            <a href="thesis.php">Thesis</a>
            <a href="subreg.php">Subject Registration</a><br> <br>
            <!-- =========================Nayeem End================================================ -->
            
            
            
            
            
            <!-- =========================Shafina Start================================================ -->
            <a href="club.php">Club Activities</a>
            <a href="game.php">Games</a><br>
            <a href="coursedetails.php">Coursedetails</a>
            <a href="academic_calender.php">Academiccalender</a>
            <a href="admission.php">Admission</a><br>
            
            <!-- =========================Shafina End================================================ -->
    <br>
    <br>
    <a href="../controllers/logout.php">Log out</a>


<?php
    }else{
        echo "<p>invalid request, please login first...</p>";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>
    </div>
</div>

<script src="../Asset/loadNot.js"></script>


</body>
</html>