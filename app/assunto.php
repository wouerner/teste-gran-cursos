<?php
include 'headers.php';

$assuntoPaiId = $_GET['assuntoPaiId'];

if (!(int)$assuntoPaiId) {
    $query = "
        SELECT * FROM Assuntos
        where assuntoPaiId is null";
}

if ((int)$assuntoPaiId > 0) {
    $query = "
        SELECT * FROM Assuntos
        where assuntoPaiId = {$assuntoPaiId}";
}
$rows = [];
foreach ($conn->query($query, PDO::FETCH_ASSOC) as $row) {
    $rows[$row['id']] = $row;
}

/* $count =  count($rows); */

/* $res = $count = 1 ? [$rows] : $rows; */

echo json_encode($rows);
die;
