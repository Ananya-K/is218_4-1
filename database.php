<?php
    $dsn = 'mysql:sq1.njit.edu;dbname=ak853';
    $username = 'ak853';
    $password = 'd56JBXhwC';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
