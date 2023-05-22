<?php
session_start();
require_once('../models/reg_sub_model.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $subject = $_POST['subject'];
    $section = $_POST['section'];

    // Validate
    if (empty($subject) || empty($section)) {
        echo 'All fields are required.';
    } elseif (strlen($section) < 1) {
        echo 'section must be at least 1 characters long.'; 
    }
    else{
            $sub_reg = ['subject'=>$subject, 'section'=> $section];
            $status = addsub_reg($sub_reg);
            
        //if($status){
            header('location: ../views/done.php');
       // }else{
         //   echo "Re-submit all.";
        //}
    }
}else{
        
    header('location: ../views/home.php');
}
?>