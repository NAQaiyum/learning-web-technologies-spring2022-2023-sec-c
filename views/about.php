<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css" />
</head>
<body>
    <div class="bg">
        <div class="o">
        <?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>


<h1>About Us</h1><br>

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
        </div>
    </div>

</body>
</html>