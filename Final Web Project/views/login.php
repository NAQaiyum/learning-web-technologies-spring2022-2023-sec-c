<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/logvalidation.js"></script>
</head>
<body>
    <h1>Login Form</h1>

    <form method="post" action="../controllers/logincheck.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br>
        <br><span id="username-error" class="error-message"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <br><span id="password-error" class="error-message"></span><br><br>


        <input type="submit" value="Login" onclick="return validateForm();"><br><br>
       
        <a href="forgotpass.php">Forgot password?</a><br><br>
        <p>Don't have an account? <a href="reg.php">Create a new account </a> </p><br>

        <a href="../index.html">Go to home page</a>
        
    </form>
</body>
</html>