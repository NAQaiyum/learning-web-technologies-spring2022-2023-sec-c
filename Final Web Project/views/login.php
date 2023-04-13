<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>

    <form method="post" action="../controllers/logincheck.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Login"><br><br>
        <a href="forgotpass.php">Forgot password?</a><br><br>
        <p>Don't have an account? <a href="reg.php">Create a new account </a> </p><br>

        <a href="../index.html">Back</a>
        
    </form>
</body>
</html>