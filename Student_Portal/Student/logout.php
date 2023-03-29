<?php 

    setcookie("username","");
    setcookie("password","");    

    setcookie('flag', 'true', time()-10, '/');
    

    //session destroy
    if(session_status()>=0){
        session_start();
        session_unset();
        session_destroy();
        echo "Logout Successful"."<br>";
    }

    header("location: home.php");

?>