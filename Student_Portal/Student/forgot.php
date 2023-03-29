<?php
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    //$password_file = "Home/regform.txt";
    $file_path = '../Home/regform.txt';
    $passwords = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach($passwords as $line) {
        list($user, $pass) = explode('||', $line);
        if($username == $user) {
            echo "<b>Your password is: </b> $pass  <br><br>";
            echo "<a href=login.php>Go to login</a>";
            exit;
        }
    }
    echo "<b>Username not found.</b><br><br>";
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
	<form action="forgot.php" method="post">
		<label>Enter your username:</label>
		<input type="text" name="username"><br><br>
		<input type="submit" value="Submit">
	</form>
    <br>
    <br>
    <a href="login.php"> Back </a>
</body>
</html>
