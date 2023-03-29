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
    <title>Subreg Page</title>
</head>
<body>
    <h1>Subject Registration</h1>
    <br>
    <?php

    $file = fopen("sreg.txt","r");
    $data = fread($file , filesize("sreg.txt"));

    echo $data;
    fclose($file);
    ?>

    
    
</body>
</html>
<?php


$file = fopen("sreg.txt","a");
$data = "Complete.\r\n";
fwrite($file, $data);
// echo "done!";

echo $data;
fclose($file);

?>
    <br>
    <br>
    <a href="adminsubreg.php"> Back </a>
    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>
