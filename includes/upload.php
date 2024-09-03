<?php
require_once 'dbh.inc.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $sponsor_tier = $_POST["sponsor_tier"];
    $sponsor_name = $_POST["sponsor_name"];
    $sponsor_website = $_POST["sponsor_website"];

    // Define the target directory
    $target_dir = "assets/sponsors/"; // Replace with your desired directory

    // Get the file name and extension
    $file_name = basename($_FILES["image"]["name"]);
    $file_path = $target_dir . $file_name;
    $imageFileType = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $uploadOk = 1;

    try {
        require_once 'upload_model.php';
        require_once 'upload_contr.php';

        $errors_upload = [];

        // Check if file already exists
        if (file_exists($file_path) && $file_path != "../assets/sponsors/") {
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
        if (is_input_empty($sponsor_tier, $sponsor_name)) {
            $errors_upload["empty_input"] = "Text box and/or select empty!";
        }

        // No file is uploaded
        if (no_file_uploaded('image')) {
            $errors_upload["empty_input"] = "No file was uploaded!";
        }

        require_once 'config_session.inc.php';

        // Check if $errors go back to index page
        if ($errors_upload) {
            $_SESSION["errors_upload"] = $errors_upload;


            header("Location: ../sponsors.php?upload=failed");
            die();
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], '../'.$file_path)) {
            // file uploaded to directory 

            // next step: upload file names to database: 
            $query = "INSERT into sponsors (file_name, file_path, sponsor_tier, sponsor_name, sponsor_website) VALUES (:file_name, :file_path, :sponsor_tier, :sponsor_name, :sponsor_website);";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":file_name", $file_name);
            $stmt->bindParam(":file_path", $file_path);
            $stmt->bindParam(":sponsor_tier", $sponsor_tier);
            $stmt->bindParam(":sponsor_name", $sponsor_name);
            $stmt->bindParam(":sponsor_website", $sponsor_website);
            $stmt->execute();

            // update session variable
            $_SESSION["uploaded_photos"] = get_sponsors($pdo);
            header("Location: ../sponsors.php?upload=success");

            
            $pdo = null;
            $stmt = null;
            die();
        } else {
            $_SESSION["errors_upload"] = "Sorry, there was an error uploading your file.";
            header("Location: ../sponsors.php?upload=failed");
            die();
        }

    } catch (PDOException $e) {

        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
