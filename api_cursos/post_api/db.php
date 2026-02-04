<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "post_api";
    $port = "3306";

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Conexión fallida: " . $e->getMessage());
    }

?>