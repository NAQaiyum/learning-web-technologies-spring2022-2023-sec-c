<?php 
    require_once('db.php');

    function addsub($sub){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into sub values('', '{$sub['name']}', '{$sub['sec']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readsub(){
        $con = getConnection();
        $sql = "select * from sub";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>