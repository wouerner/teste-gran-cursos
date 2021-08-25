<?php
/* phpinfo(); */
/* include 'headers.php'; */


$params = $_GET;
/* var_dump($_GET); */
/* die; */

include 'db.php';
include $params['controller'] . '.php';
/* $payload = json_decode(file_get_contents('php://input'), true); */

/* $name = $payload['name']; */
/* $channelId = $payload['channelId']; */

/* $query = "INSERT INTO channels (name, channel_id) VALUES (?, ?)"; */
$query = "SELECT * FROM Assuntos";

foreach ($conn->query($query) as $row) {
    $rows[] = $row;
}
/* var_dump($query); */
/* die; */

/* $t = $con->prepare($query); */
var_dump($rows);

echo '<pre>';


foreach ($rows as $row) {
    $rows[] = $row;
}

die;

$t->execute([$name, $channelId]);

echo json_encode('success');
die;
