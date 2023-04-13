<!DOCTYPE html>
<html>
<head>
    <title>Agreement Form</title>
</head>
<body>
    <h1>Agreement Form</h1>

    <form method="post" action="../controllers/agreementcheck.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Submit">
        <br>
        <br>

        <a href="terms.php">Back</a>
    
    </form>
</body>
</html>