<?php 
    require_once('db.php');

    function addmis($mission){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into mission values('', '{$mission['mission']}', '{$mission['date']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readmis(){
        $con = getConnection();
        $sql = "select * from mission";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>