<?php 
    require_once('db.php');

    function auth($subject, $section){

        $con = getConnection();
        $sql = "select * from sub_reg where subject='{$subject}' and section='{$section}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addsub_reg($sub_reg){
        $con = getConnection();
        $sql = "insert into sub_reg values('', '{$sub_reg['subject']}', '{$sub_reg['section']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function readsub_reg(){
        $con = getConnection();
        $sql = "select * from sub_reg";
        $info = mysqli_query($con, $sql);
        return $info;
    }

    function updatesub_reg($sub_reg) {
        $con = getConnection();
        $sql = "UPDATE sub_reg SET password='{$sub_reg['section']}' WHERE subject='{$sub_reg['subject']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }



?>