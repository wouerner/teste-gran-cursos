<?php
include 'headers.php';

$bancaId = $_GET['banca'];
$orgaoId = $_GET['orgao'];

    $query = "
    SELECT * FROM Assuntos a 
        inner join Questoes q ON a.id = q.assuntoId 
    where 
        q.bancaId = $bancaId
        and
        q.orgaoId = $orgaoId";

foreach ($conn->query($query, PDO::FETCH_ASSOC) as $row) {
    $rows[] = $row;
}

echo json_encode($rows);
die;
