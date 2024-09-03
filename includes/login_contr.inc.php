<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function is_input_empty(string $username, string $pwd) {
    if (empty($username) || empty($pwd)) {
        return true;
    } else {
        return false;
    } 
}

function is_username_wrong(bool|array $result) {
    if(!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $pwd, string $hashed_pwd) {
    if(!password_verify($pwd, $hashed_pwd)) {
        return true;
    } else {
        return false;
    }
}