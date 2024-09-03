<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.inc.php';
require_once 'bg_model.inc.php';
require_once 'bg_contr.inc.php';

require_once 'config_session.inc.php'; // Start the session

// Fetch the current background color from the session, or fallback to the database
$backgroundColor = $_SESSION['background_color'] ?? getBackgroundColor($pdo)['setting_value']; // Default to white if not set

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if ($_POST['colors'] == "") {
        $newColor = $backgroundColor; 
    } else {
        $newColor = $_POST['colors'];
    }
    echo $newColor;
    // Update the background color in the database
    updateBackgroundColor($pdo, $newColor);

    // Update the session variable
    $_SESSION['background_color'] = $newColor;

    // Set the updated background color
    $backgroundColor = $newColor;

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
    die();
}
