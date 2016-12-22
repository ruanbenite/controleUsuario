<?php
$dsn="mysql:dbname=usuarios;host=localhost";
$dbuser="root";
$dbpass="";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $ex) {
    echo 'Falha na conex�o com o banco'. $ex->getMessage();
}