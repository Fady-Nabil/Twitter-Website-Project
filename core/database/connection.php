<?php
/**
 * Created by PhpStorm.
 * User: fady
 * Date: 5/17/2020
 * Time: 8:32 PM
 */
$dsn = 'mysql:host=localhost; dbname=tweety';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Connection Error:' . $e->getMessage();
}