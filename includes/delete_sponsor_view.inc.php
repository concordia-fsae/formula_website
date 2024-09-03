<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function check_delete_error() {
    if (isset($_SESSION["error_delete"])) {
        $error = $_SESSION["error_delete"];

        echo "<br>";
        echo '<p class="delete_error">' . $error . '</p>';
        

        unset($_SESSION["error_delete"]);
    } else if (isset($_GET["delete"]) && $_GET["delete"]=="success") {
        echo "<br>";
        echo '<p class="delete_success">Successfully deleted!';
    }
}