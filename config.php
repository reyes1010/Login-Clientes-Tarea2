<?php
define('USER', 'root');
define('PASSWORD', 'root');
define('HOST', 'localhost');
define('DATABASE', 'login');
try {
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
}
