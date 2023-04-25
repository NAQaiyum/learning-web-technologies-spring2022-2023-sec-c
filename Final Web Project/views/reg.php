<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/reg.css">
    <script src="../js/regvalidation.js"></script>
</head>
<body>
    <h1>Registration Form</h1>
    <form method="post" action="../controllers/regcheck.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br><span id="username_error" class="error_message"></span><br><br>


        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br><span id="email_error" class="error_message"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><span id="password_error" class="error_message"></span><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
        <br><span id="confirm_password_error" class="error_message"></span><br><br>

        <input type="submit" value="Submit" onclick="return validateForm();">
        <br>
        <br>
        <br>
        <a href="login.php">Already have an account</a>
    </form>
    <br>
<center>
    <br>

    <a href="../index.html">Go to home page</a>
</center>
</body>
</html>