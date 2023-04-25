<?php
include '../models/bikedb.php';
$data = [];
$info = readbike();
if ($info->num_rows > 0) {
    while($row = $info->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);