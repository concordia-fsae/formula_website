<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $photo_data = $_POST['photo_data'];
    list($photo_id, $file_path) = explode('|', $photo_data);

    $error = "";

    if (empty($photo_id)) {
        $error = "Portrait not selected!";
    }

    require_once '../config_session.inc.php';

    if ($error != "") {
        $_SESSION["error_delete"] = $error;

        header("Location: ../../team.php?delete=failed");
        die();
    }

    // CAN NOW DELETE FILE:

    // delete in database
    try {
        require_once '../dbh.inc.php';
        $query = "DELETE FROM team WHERE id = :photo_id";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":photo_id", $photo_id);
        $stmt->execute();
        

        require_once '../upload_model.php';

        $_SESSION['uploaded_team'] = get_team($pdo);
        
    } catch (PDOException $e) {

        die("Query failed" . $e->getMessage());
    }

    // delete in directory
    $file_path = '../../' . $file_path;
    if (file_exists($file_path)) {
        if (unlink($file_path)) {
            // File successfully deleted
            header("Location: ../../team.php?delete=success");
        } else {
            // File could not be deleted
            $_SESSION["error_delete"] = "File could not be deleted from the directory.";
            //header("Location: ../../team.php?delete=failed");
        }
    } else {
        // File does not exist
        $_SESSION["error_delete"] = "File does not exist.";
        header("Location: ../../team.php?delete=failed");
    }
    $pdo = null;
    $stmt = null;
    die();

} else {
    header("Location: ../../team.php");
    die();
}
