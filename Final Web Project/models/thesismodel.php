<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from thesis where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addthesis($thesis){
        $con = getConnection();
        $sql = "insert into thesis values('', '{$thesis['username']}', '{$thesis['password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function readthesis(){
        $con = getConnection();
        $sql = "select * from thesis";
        $info = mysqli_query($con, $sql);
        return $info;
    }

    function updatethesis($thesis) {
        $con = getConnection();
        $sql = "UPDATE thesis SET password='{$thesis['password']}' WHERE username='{$thesis['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }



?>