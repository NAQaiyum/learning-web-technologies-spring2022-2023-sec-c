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
    <title>Apply Page</title>
</head>
<body>
    <h1>Apply For Thesis</h1>
    <br>
    <?php

    $file = fopen("apply.txt","r");
    $data = fread($file , filesize("apply.txt"));

    echo $data;
    fclose($file);
    ?>

    
    
</body>
</html>
<?php


$file = fopen("apply.txt","a");
$data = "Done!!!If you submit it.\r\n";
fwrite($file, $data);
// echo "done!";

echo $data;
fclose($file);

?>
    <br>
    <br>
    <a href="adminthesis.php"> Back </a>
    <?php
    
}
else{
    
    header("refresh: 5 ; url =../Home/login.php");
    die("Please Login First");

}
?>