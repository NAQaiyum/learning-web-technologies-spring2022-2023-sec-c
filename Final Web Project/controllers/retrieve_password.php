<?php
// Connect to the database
session_start();
require_once('../models/usermodel.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Validate
    if (empty($username) || empty($email)) {
        echo 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
    } else{
        $abc = retrieve_password($username, $email);
        echo " $abc <br>";
		echo "<a href='../views/login.php'> Go to login </a>";
    }
}
?>