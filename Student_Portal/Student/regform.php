<?php
// Define file path to store data
$file_path = '../Home/regform.txt';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form data
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Invalid email address.';
    } elseif ($password != $confirm_password) {
        $error_message = 'Password does not match.';
    } elseif (strlen($password) < 8) {
        $error_message = 'Password must be at least 8 characters long.'; }
    else {
        // Save user data to file
        $user_data = "$name||$password||$email\n";
        file_put_contents($file_path, $user_data, FILE_APPEND);

        // Redirect to success page
        header('Location: login.php');
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

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <input type="submit" value="Submit">
    </form>
    <br>

    <a href="login.php"> Already have an account </a>
    <br>
    <br>
    <br>
    <a href="home.php"> Back </a>
</body>
</html>
