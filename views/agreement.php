<!DOCTYPE html>
<html>
<head>
    <title>Agreement Form</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="bg">
        <div class="o">

            <h1>Agreement Form</h1>
            
    <form method="post" action="../controllers/agreementcheck.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br>
        <p id="username-error"></p>  <br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <p id="password-error"></p> <br>
        
        <input type="submit" value="Submit" onclick="validateForm()" >
        <br>
        <br>
        <br>
        <br>
        
        <a href="terms.php">Back</a>
        
    </form>
</div>
</div>
    <script src="../Asset/agreevalidation.js"></script>
</body>
</html>