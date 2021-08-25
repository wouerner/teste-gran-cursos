<?php
include 'headers.php';

$assuntoId = $_GET['assunto'];

    $query = "

SELECT
     COUNT(*) as total
FROM
    Questoes q 
where
    q.assuntoId = $assuntoId
group by
    q.assuntoId
        ";

$res = $conn->query($query, PDO::FETCH_ASSOC);
$res = $res->fetch();

echo json_encode(($res) ? $res : ['total' => 0] );
die;
