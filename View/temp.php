<?php
$user     = 'root';
$password = 'root';
$db       = 'vec';
$host     = 'localhost';
$port     = 8889;

$dsn = 'mysql:host=localhost;dbname=vec;port=8889;';
$pdo = new PDO($dsn, $user, $password);

?>