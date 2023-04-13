<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Subject Registration Form</h1>

    <form method="post" action="../controllers/sub_reg_check.php">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="<?php if(isset($_COOKIE["subject"])) { echo $_COOKIE["subject"]; } ?>"><br> <br>

        <label for="section">Section:</label>
        <input type="section" id="section" name="section"><br><br>

        <input type="submit" value="Submit">
        <br>
        <br>

        <a href="subreg.php">Back</a>
    
    </form>
</body>
</html>