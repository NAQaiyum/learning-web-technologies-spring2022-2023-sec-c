<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from somoy where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addsomoy($somoy){
        $con = getConnection();
        $sql = "insert into somoy values('', '{$somoy['username']}', '{$somoy['password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function readsomoy(){
        $con = getConnection();
        $sql = "select * from somoy";
        $info = mysqli_query($con, $sql);
        return $info;
    }

    function updatesomoy($somoy) {
        $con = getConnection();
        $sql = "UPDATE somoy SET password='{$somoy['somoy']}' WHERE username='{$somoy['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }



?>