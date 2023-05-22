<?php
// Define file path to store data
$file_path = '../Home/sreg.txt';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $sub = $_POST['sub'];


    // Validate form data
    if (empty($name) || empty($sub)) {
        $error_message = 'All fields are required.';
    }
    else {
        // Save user data to file
        $user_data = "$name||$sub\n";
        file_put_contents($file_path, $user_data, FILE_APPEND);

        // Redirect to success page
        header('Location: subcon.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>

    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="sub">Subject:</label>
        <input type="sub" id="sub" name="sub" required><br>


        <input type="submit" value="Submit">
    </form>

    <br>
    <br>
    <a href="subreg.php"> Back </a>
</body>
</html>
