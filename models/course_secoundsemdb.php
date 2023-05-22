<?php 
    require_once('db.php');

    function addsecoundsemester($secoundsemester){
        $con = getConnection();
        // $sql = "insert into notification values('','$' , '$time' )";
        $sql = "insert into secoundsemester values('', '{$secoundsemester['name']}', '{$secoundsemester['date']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readsecoundsemester(){
        $con = getConnection();
        $sql = "select * from secoundsemester";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>