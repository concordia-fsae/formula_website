<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $file_path = $_POST['sponsor_path'];

    $error = "";

    if (empty($file_path)) {
        $error = "Sponsor not chosen!";
    }

    require_once 'config_session.inc.php';

    if ($error != "") {
        $_SESSION["error_delete"] = $error;

        header("Location: ../sponsors.php?delete=failed");
        die();
    }

    // CAN NOW DELETE FILE:

    // delete in database
    try {
        require_once 'dbh.inc.php';
        $query = "DELETE FROM sponsors WHERE file_path = :file_path";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":file_path", $file_path);
        $stmt->execute();
        

        require_once 'upload_model.php';

        $_SESSION['uploaded_sponsors'] = get_sponsors($pdo);
        
    } catch (PDOException $e) {

        die("Query failed" . $e->getMessage());
    }

    // delete in directory
    $file_path = '../' . $file_path;
    if (file_exists($file_path)) {
        if (unlink($file_path)) {
            // File successfully deleted
            header("Location: ../sponsors.php?delete=success");
        } else {
            // File could not be deleted
            $_SESSION["error_delete"] = "File could not be deleted from the directory.";
            header("Location: ../sponsors.php?delete=failed");
        }
    } else {
        // File does not exist
        $_SESSION["error_delete"] = "File does not exist.";
        header("Location: ../sponsors.php?delete=failed");
    }
    $pdo = null;
    $stmt = null;
    die();

} else {
    header("Location: ../index.php");
    die();
}
