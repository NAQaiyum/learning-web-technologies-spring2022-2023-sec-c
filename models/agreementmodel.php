<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from agreement where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addagree($agreement){
        $con = getConnection();
        $sql = "insert into agreement values('', '{$agreement['username']}', '{$agreement['password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function readagree(){
        $con = getConnection();
        $sql = "select * from agreement";
        $info = mysqli_query($con, $sql);
        return $info;
    }

    function updateagree($agreement) {
        $con = getConnection();
        $sql = "UPDATE agreement SET password='{$agreement['password']}' WHERE username='{$agreement['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }



?>