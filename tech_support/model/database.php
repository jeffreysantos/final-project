<?php
    $dsn = 'mysql:host=sql2,njit.edu;dbname=tech_support';
    $username = 'js559';
    $password = 'IHnUxPdY';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
