<?php 
    require_once('db.php');

    function addcal($cal){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into cal values('', '{$cal['month']}', '{$cal['date']}', '{$cal['activites']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readcal(){
        $con = getConnection();
        $sql = "select * from cal";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>