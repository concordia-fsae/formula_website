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

    require_once '../config/config_session.inc.php';

    if ($error != "") {
        $_SESSION["error_delete"] = $error;

        header("Location: ../../team.php?delete=failed");
        die();
    }

    // CAN NOW DELETE FILE:

    // delete in directory
    $full_path = '../../' . $file_path;
    if (file_exists($full_path)) {
        
        require_once '../upload_model.php';
        require_once '../config/dbh.inc.php';
        $team = get_team($pdo);
        $duplicate_image = false;
        foreach ($team as $team_member) {
            echo $team_member['file_path'] ."=".$file_path.'<br>';
            echo $team_member['id'] ."=".$photo_id.'<br><br>';
            if ($team_member["file_path"] == $file_path && $team_member["id"] != $photo_id) {
                $duplicate_image = true; // don't delete file
            }
        }

        // delete in database
        try {
            require_once '../config/dbh.inc.php';

            $query = "DELETE FROM team WHERE id = :photo_id";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":photo_id", $photo_id);
            $stmt->execute();
            

            require_once '../upload_model.php';

            $_SESSION['uploaded_team'] = get_team($pdo);
            
        } catch (PDOException $e) {

            die("Query failed" . $e->getMessage());
        }

        if ($duplicate_image == true) {
            header("Location: ../../team.php#goToTeamAddDrop");
        } else {
            if (unlink($full_path)) {
                // File successfully deleted
                header("Location: ../../team.php?delete=success#goToTeamAddDrop");
            } else {
                // File could not be deleted
                $_SESSION["error_delete"] = "File could not be deleted from the directory.";
                header("Location: ../../team.php?delete=failed#goToTeamAddDrop");
            }
        }
    } else {
        // File does not exist
        $_SESSION["error_delete"] = "File does not exist.";
        
        // delete in database
        try {
            require_once '../config/dbh.inc.php';

            $query = "DELETE FROM team WHERE id = :photo_id";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":photo_id", $photo_id);
            $stmt->execute();
            

            require_once '../upload_model.php';

            $_SESSION['uploaded_team'] = get_team($pdo);
            
        } catch (PDOException $e) {

            die("Query failed" . $e->getMessage());
        }

        header("Location: ../../team.php?delete=failed#goToTeamAddDrop");
    }

    $pdo = null;
    $stmt = null;
    die();

} else {
    header("Location: ../../team.php");
    die();
}
