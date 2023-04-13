<?php 
    require_once('db.php');

    function addpol($user){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into policy values('', '{$user['policy']}', '{$user['type']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readpol(){
        $con = getConnection();
        $sql = "select * from policy";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>