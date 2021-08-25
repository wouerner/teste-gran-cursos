<?php
/* const PATH_DB = 'sqlite:' . __DIR__ . '/../db.sqlite3'; */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try{
    $conn = new \PDO('mysql:host=db;dbname=teste;charset=utf8mb4', 'teste', 'teste', array(
        \PDO::ATTR_EMULATE_PREPARES => false,
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
    ));

} catch(\Exception $e){
    echo($e);
}
/* var_dump($conn); */
/* die; */

/* $con = new PDO(PATH_DB); */
