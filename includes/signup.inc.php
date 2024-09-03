<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        //ERROR HANDLERS
        $errors = [];

        if(is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if(is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid Email used!";
        }
        if(is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if(is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered";
        }

        require_once 'config_session.inc.php'; //starts session in a safer way

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            $signup_data = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signup_data;

            header("Location: ../index.php?signup=failed");
            die();
        }

        // can now create the user

        create_user($pdo, $username, $pwd, $email);

        //Sign up success
        header("Location: ../index.php?signup=success");
        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}