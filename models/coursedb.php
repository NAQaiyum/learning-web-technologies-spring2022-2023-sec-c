<?php 
    require_once('db.php');

    function addfirstsemester($firstsemester){
        $con = getConnection();
        // $sql = "insert into notification values('','$' , '$time' )";
        $sql = "insert into firstsemester values('', '{$firstsemester['name']}', '{$firstsemester['date']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readfirstsemester(){
        $con = getConnection();
        $sql = "select * from firstsemester";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>