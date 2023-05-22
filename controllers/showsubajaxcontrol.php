<?php
include '../models/reg_sub_model.php';
$data = [];
$info = readsub_reg();
if ($info->num_rows > 0) {
    while($row = $info->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);