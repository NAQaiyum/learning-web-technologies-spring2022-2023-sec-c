<?php 
    require_once('db.php');

    function addadmission($admission){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into admission values('', '{$admission['username']}', '{$admission['password']}', '{$admission['email']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readadmission(){
        $con = getConnection();
        $sql = "select * from admission";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>