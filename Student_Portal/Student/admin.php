<?php
// Define file path to store data
$file_path = '../Home/admin.txt';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($name) || empty($password)) {
        $error_message = 'All fields are required.';
    } elseif ($name == 'Admin' && $password == 'admin123') {
        // Login as admin
        session_start();
        $_SESSION['user_type'] = 'admin';
        header('Location: admin.php');
        exit;
    } else {
        // Check if user exists in file
        $user_data = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($user_data as $user) {
            list($user_name,  $user_password, $user_email) = explode('||', $user);
            if ($name == $user_name && $password == $user_password) {
                // Login as user
                session_start();
                $_SESSION['user_type'] = $name;
                setcookie('flag', 'true',time()+3600,'/'); // Set cookie to remember user's name
                header('Location: adminhome.php');
                exit;
            }
        }

        $error_message = 'Invalid name or password.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>

    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
        <p>Don't have an account? <a href="reg.php">create one </a> </p>
        <a href="forgotpass.php">Forgot password?</a>
    </form>
</body>
</html>
