<!DOCTYPE html>
<html>
<head>
    <title>Thesis Form</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="bg">
        <div class="o">
            <h1>Thesis Form</h1>
            
    <form method="post" action="../controllers/thesischeck.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="Submit">
        <br>
        <br>
        
        <a href="thesis.php">Back</a>
        
    </form>
    
            </div>
        </div>
    <script src="../js/thesisvalidation.js"></script>
</body>
</html>