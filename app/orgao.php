<?php
include 'headers.php';
$rows = [];
$query = "SELECT * FROM Orgaos";

foreach ($conn->query($query, PDO::FETCH_ASSOC) as $row) {
    $rows[$row['id']] = $row;
}

echo json_encode($rows);
die;
