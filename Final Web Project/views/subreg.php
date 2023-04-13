<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Subject Registration</h1>

<a href="show_sub.php">Show All Subject</a><br>
<a href="reg_sub.php">Subject Registration Form</a><br>


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