<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set parameters for hosting to server
// $host = 'sql108.infinityfree.com';
// $dbname = 'if0_37777588_formula_website';
// $dbusername = 'if0_37777588';
// $dbpassword = '2EacXj5SuzR0';

// Host locally (using XAMPP)
$host = 'localhost';
$dbname = 'formula_website';
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}