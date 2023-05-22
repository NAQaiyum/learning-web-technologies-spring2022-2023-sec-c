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
    <title>Paper</title>
</head>
<body>
    <center>
        <h1>Publish Paper</h1>
    </center>
    <br>

    <a href="editpublish1.php">Publish Paper 1</a><br>
    <a href="editpublish2.php">Publish Paper 2</a><br>
     

    <br>
    <br>
    <a href="adminthesis.php"> Back </a>
    


</body>
</html>
    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>





