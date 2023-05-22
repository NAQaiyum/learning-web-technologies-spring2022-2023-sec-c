<!DOCTYPE html>
<html>
<head>
    <title>Join Game</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="bg">
        <div class="o">
            
            <form method="post" action="../controllers/joingamecheck.php" onsubmit="return validateForm()">
        <fieldset>
            <h1>Joining Form</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
            <br><span id="username-error" class="error-message"></span> <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><span id="password-error" class="error-message"></span> <br>
            
            
            <input type="submit" value="Submit" ><br><br>
            <br>
            <br>
            
            <a href="game.php">Back</a>
        </fieldset>
    </form>
    
            </div>
        </div>
    <script src="../js/joinsomoyvalidation.js"></script>
</body>
</html>

