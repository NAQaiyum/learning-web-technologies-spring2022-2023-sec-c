<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
    
}
else{
    
    header("refresh: 5 ; url =../Student/login.php");
    die("Please Login First");

}
?>

<?php
// Define file path to store data
$file_path = '../Student/agree.txt';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
   
    $password = $_POST['password'];
  

    // Validate form data
    if (empty($name) || empty($password) ) {
        $error_message = 'All fields are required.';
    } elseif (strlen($password) < 8) {
        $error_message = 'Password must be at least 8 characters long.'; }
    else {
        // Save user data to file
        $user_data = "$name||$password\n";
        file_put_contents($file_path, $user_data, FILE_APPEND);
        //echo "Done!!!";

        

        // Redirect to success page
        header('Location: terms.php');
        
        exit;
    }


   
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agreement</title>
</head>
<body>
    <h1>Agreement Terms</h1>

    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>



        <input type="submit" value="Submit" >
        
    </form>
    
    <br>


    <br>
    <br>
    <a href="terms.php"> Back </a>
</body>
</html>
