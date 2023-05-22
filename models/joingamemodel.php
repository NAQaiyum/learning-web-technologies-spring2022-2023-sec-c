<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from game where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addgame($game){
        $con = getConnection();
        $sql = "insert into game values('', '{$game['username']}', '{$game['password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function readgame(){
        $con = getConnection();
        $sql = "select * from game";
        $info = mysqli_query($con, $sql);
        return $info;
    }

    function updategame($game) {
        $con = getConnection();
        $sql = "UPDATE game SET password='{$game['game']}' WHERE username='{$game['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }



?>