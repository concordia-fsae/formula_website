<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $user_id = $_POST['account_id'];

    $error = "";

    if (empty($user_id)) {
        $error = "Account_id is empty";
    }

    require_once '../config_session.inc.php';

    if ($error != "") {
        $_SESSION["error_account_delete"] = $error;

        header("Location: ../../team.php?delete_account=failed");
        die();
    }

    // CAN NOW DELETE ACCOUNT:

    // delete in database
    try {
        require_once '../dbh.inc.php';
        $query = "DELETE FROM users WHERE id = :user_id";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();

        header("Location: ../../team.php?delete_account=success");

    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
    $pdo = null;
    $stmt = null;
    die();

} else {
    header("Location: ../../team.php");
    die();
}
