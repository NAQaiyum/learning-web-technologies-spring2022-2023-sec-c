<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="bg">
        <div class="o">
            <h1>Subject Registration Form</h1>
            
    <form method="post" action="../controllers/sub_reg_check.php">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="<?php if(isset($_COOKIE["subject"])) { echo $_COOKIE["subject"]; } ?>"><br> <br>

        <label for="section">Section:</label>
        <input type="section" id="section" name="section"><br><br>
        
        <input type="submit" value="Submit">
        <br>
        <br>
        <br>
        <br>
        
        <a href="subreg.php">Back</a>
        
    </form>
    
            </div>
        </div>
    <script src="../js/regsubvalidation.js"></script>
</body>
</html>