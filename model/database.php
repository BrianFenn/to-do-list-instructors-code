<?php
    $dsn = 'mysql:host=erxv1bzckceve5lh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=xr7mltv9xu2cv4eo';
    $username = 'ps6tp9byxkqga18a';
    $password = 'ikhd47q0kgp7lsz2';
    //$dbname = 'xr7mltv9xu2cv4eo';

    try {
        //$db = new PDO($dsn, $username);
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
