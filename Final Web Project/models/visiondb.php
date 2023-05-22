<?php 
    require_once('db.php');

    function addvis($user){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into vision values('', '{$user['vision']}', '{$user['date']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readvis(){
        $con = getConnection();
        $sql = "select * from vision";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>