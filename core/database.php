<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', 'password');
} catch (PDOException $e) {
    die('Error connecting to database. <br />'  . $e->getMessage());
}
