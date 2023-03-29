<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis</title>
</head>
<body>
    <center>
        <h1>Publish Paper Link</h1>
    </center>
    <br>

     <a href="publish1.php">Publish Paper 1</a><br>
     <a href="publish2.php">Publish Paper 2</a><br>
    

    <br>
    <br>
    <a href="thesis.php"> Back </a>


</body>
</html>
    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>




