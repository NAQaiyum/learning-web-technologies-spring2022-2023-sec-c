<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into user values('', '{$user['name']}', '{$user['contactNo']}','{$user['username']}', '{$user['password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


    function updateUser($user) {
        $con = getConnection();
        $sql = "UPDATE user SET name='{$user['name']}', contactNo='{$user['contactNo']}',password='{$user['password']}' WHERE username='{$user['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    
    function deleteUser($user) {
        $con = getConnection();
        $sql = "DELETE FROM user WHERE username='{$user['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchUser($username) {
        
        $con = getConnection();
        $sql = "SELECT * FROM user WHERE username LIKE '%$username%'";
        $result = mysqli_query($con, $sql);
      
        return $result;
      
      }
?>