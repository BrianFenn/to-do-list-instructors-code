<?php
    $dsn = 'erxv1bzckceve5lh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $username = 'ps6tp9byxkqga18a';
    $password = 'ikhd47q0kgp7lsz2';

    try {
        //$db = new PDO($dsn, $username);
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
