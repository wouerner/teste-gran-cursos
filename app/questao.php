<?php
include 'headers.php';

$bancaId = $_GET['banca'];
$orgaoId = $_GET['orgao'];

    $query = "
        SELECT * FROM Questoes 
        where 
        bancaId = {$bancaId}
        and
        orgaoId = {$orgaoId}
        ";

foreach ($conn->query($query, PDO::FETCH_ASSOC) as $row) {
    $rows[$row['id']] = $row;
}

echo json_encode($rows);
die;
