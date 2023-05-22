<?php 
    require_once('db.php');

    function addbike($bike){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into bike values('', '{$bike['mission']}', '{$bike['date']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readbike(){
        $con = getConnection();
        $sql = "select * from bike";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>