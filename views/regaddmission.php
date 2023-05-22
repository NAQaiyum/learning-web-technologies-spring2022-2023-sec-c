
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="bg">
        <div class="o">
            
            <form method="post" action="../controllers/addcheck.php">
        <fieldset>
            <h1>Registration Form</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br><span id="username-error" class="error-message"></span> <br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <br><span id="email-error" class="error-message"></span> <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><span id="password-error" class="error-message"></span> <br>
            <br>
            <input type="submit" value="Submit" onclick="return validateForm();"><br><br>
            
            <button><a href="admission.php">Back</a></button>
            
        </fieldset>
        <br>
        
    </form>
    
            </div>
        </div>
    <script src="../js/regaddmission.js"></script>
    
</body>
</html>
