<?php
session_start();
require_once('../models/addmodel.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate
    if (empty($username) || empty($email) || empty($password)) {
        echo 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
    } elseif (strlen($password) < 8) {
        echo 'Password must be at least 8 characters long.'; 
    }
    else{
            $admission = ['username'=>$username, 'password'=> $password, 'email'=> $email];
        $status = addadmission($admission);
            
        if($status){
            header('location: ../views/done.php');
        }else{
            echo "DB error, please try again";
        }
    }
}else{
        
    header('location: ../views/login.php');
}
?>