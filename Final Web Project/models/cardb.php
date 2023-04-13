<?php 
    require_once('db.php');

    function addcar($car){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into car values('', '{$car['mission']}', '{$car['date']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readcar(){
        $con = getConnection();
        $sql = "select * from car";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>