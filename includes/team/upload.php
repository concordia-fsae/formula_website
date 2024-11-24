<?php
require_once '../dbh.inc.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $category = $_POST["category"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $position = $_POST["position"];
    $linkedin = $_POST["linkedin"];

    // Define the target directory
    $target_dir = "assets/portraits/"; // Replace with your desired directory

    // Get the file name and extension
    $file_name = basename($_FILES["image"]["name"]);
    $file_path = $target_dir . $file_name;
    $imageFileType = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $uploadOk = 1;

    try {
        require_once '../upload_model.php';
        require_once '../upload_contr.php';

        $errors_upload = [];

        // Check if file already exists
        if (file_exists($file_path) && $file_path != "../../assets/portraits/") {
            $errors_upload["same_file"] = "Sorry, file already exists.";
        } 

        // Check file size
        if ($_FILES["image"]["size"] > 5000000) { // Adjust maximum file size as needed
            $errors_upload["file_too_big"] = "Sorry, your file is too large.";
        } 

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "svg" && $imageFileType != "jpeg" && $imageFileType != "avif") {
            $errors_upload["wrong_file_type"] = "Sorry, only JPG, PNG, JPEG, and svg files are allowed.";
        }

        // Empty input from text box or select
        if (is_team_input_empty($category, $first_name, $last_name, $position)) {
            $errors_upload["empty_input"] = "Text box and/or select empty! Linkedin can be left empty if needed";
        }

        // No file is uploaded
        if (no_file_uploaded('image')) {
            $errors_upload["empty_input"] = "No file was uploaded!";
        }

        require_once '../config_session.inc.php';

        // Check if $errors go back to index page
        if ($errors_upload) {
            $_SESSION["errors_upload"] = $errors_upload;

            header("Location: ../../team.php?upload=failed");
            die();
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], '../../'.$file_path)) {
            // file uploaded to directory 

            // next step: upload file names to database: 
            $query = "INSERT into team (file_name, file_path, category, position, first_name, last_name, linkedin) VALUES (:file_name, :file_path, :category, :position, :first_name, :last_name, :linkedin);";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":file_name", $file_name);
            $stmt->bindParam(":file_path", $file_path);
            $stmt->bindParam(":category", $category);
            $stmt->bindParam(":position", $position);
            $stmt->bindParam(":first_name", $first_name);
            $stmt->bindParam(":last_name", $last_name);
            $stmt->bindParam(":linkedin", $linkedin);
            $stmt->execute();

            // update session variable
            $_SESSION["uploaded_team"] = get_team($pdo);
            header("Location: ../../team.php?upload=success");

            $pdo = null;
            $stmt = null;
            die();
        } else {
            $errors_upload["failed_move"] = "Sorry, there was an error uploading your file to ../../".$file_path;
            $_SESSION["errors_upload"] = $errors_upload;
            header("Location: ../../team.php?upload=failed");
            die();
        }

    } catch (PDOException $e) {

        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../../index.php");
    die();
}
