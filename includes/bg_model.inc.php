<?php
declare(strict_types=1);

include 'dbh.inc.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function getBackgroundColor($pdo) {
    $query = "SELECT setting_value FROM settings WHERE setting_name = 'background_color'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result; 
}

function updateBackgroundColor($pdo, $color) {
    // Prepare the SQL query
    $query = "UPDATE settings SET setting_value = :color WHERE setting_name = 'background_color'";
    $stmt = $pdo->prepare($query);
    
    // Bind the color parameter
    $stmt->bindParam(':color', $color, PDO::PARAM_STR);
    
    // Execute the query
    $stmt->execute();
}