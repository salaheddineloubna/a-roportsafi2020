<?php
$host="localhost"; 
$root="root"; 
$root_password=""; 
$db="newdb"; 
    try {
        $dbh = new PDO("mysql:host=$host", $root, $root_password);
        $dbh->exec(file_get_contents('create_data.txt'))
        or die(print_r($dbh->errorInfo(), true));

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }
?>