<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Terms & Conditions</h1>
<link rel="stylesheet" type="text/css" href="../css/terms.css">

<a href="general.php">General Terms</a><br>
<a href="agreement.php">Agreement To Terms</a><br>


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