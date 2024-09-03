<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        $errors = [];

        if(is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        
        $result = get_user($pdo, $username);
        if(is_username_wrong($result)) {
            $errors["username_wrong"] = "Username is wrong!";
        }
        if(!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["username_wrong"] = "Password is wrong!";
        }

        require_once 'config_session.inc.php'; //starts session in a safer way

        if ($errors) {
            $_SESSION["errors_login"] = $errors;


            header("Location: ../index.php?login=failed");
            die();
        }

        $newSessionId = session_create_id(); 
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);
        $_SESSION['last_regeneration'] = time();
 
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        header("Location: ../index.php?login=success");
        $pdo = null;
        $stmt = null;
        
        die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}