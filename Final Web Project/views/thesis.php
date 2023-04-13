<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Thesis</h1>

<a href="apply_thesis.php">Apply For Thesis</a><br>
<a href="publish_thesis.php">Publish Thesis</a><br>


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