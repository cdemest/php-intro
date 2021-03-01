<?php

$host = "localhost";
$db = "mytest";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);

    // See exceptions during debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p>Connected to DB</p>";
} catch (PDOException $e) {
    // echo message here or throw an exception if it is critical
    throw new PDOException($e->getMessage()); // throw exception in order to
}

require_once 'crud.php';
$crud = new crud($pdo); 
?>