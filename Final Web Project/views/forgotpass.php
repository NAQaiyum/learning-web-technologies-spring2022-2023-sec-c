<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="../css/forgot.css">
	<script src="../js/retrive_pass.js"></script>
</head>
<body>
	<br><br><br>
	<center><h1>Password Recovery</h1></center>
	<form method="post" action="../controllers/retrieve_password.php">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<br><span id="username_error" class="error_message"></span><br><br>



		<label for="email">Email:</label>
		<input type="text" name="email" id="email">
		<br><span id="email_error" class="error-message"></span><br><br>


		<input type="submit" value="Login" onclick="return validateForm();"><br><br>
	</form>
    <br>

    <center><a href="login.php">Back</a></center>
</body>
</html>