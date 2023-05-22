<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="bg">
        <div class="o">
            
            
            
            <?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Subject Registration</h1>
<link rel="stylesheet" type="text/css" href="../css/subreg.css">

<a href="showsubajax.php">Show All Subject</a><br>
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
</div>
</div>
</body>
</html>