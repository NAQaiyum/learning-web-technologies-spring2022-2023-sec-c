<?php
include '../models/calenderdb.php';
$data = [];
$info = readcal();
if ($info->num_rows > 0) {
    while($row = $info->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);