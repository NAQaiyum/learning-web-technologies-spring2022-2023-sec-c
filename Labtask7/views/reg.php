<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/style.css" />
    <title>Registration Form</title>
</head>
<body>
     <div class="bg">
        <div class="o">
        <?php require_once("../js/regCheckJS.php"); ?>
    <h1>Registration Form</h1>

    <form method="post" action="../controllers/regCheck.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        
        <label for="contactNo">Contact no:</label>
        <input type="number" id="contactNo" name="contactNo"><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password"><br>

        <input type="submit" value="Submit" onclick="validateForm()">
    </form>
    <br>
    <br>

    <a href="admin.php">Back</a>
        </div>
     </div>
</body>
</html>