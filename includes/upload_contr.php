<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function is_input_empty(string $sponsor_tier, string $text_box) {
    if (empty($sponsor_tier) || empty($text_box)) {
        return true;
    } else {
        return false;
    } 
}

function is_team_input_empty(string $category, string $first_name, string $last_name, string $position) {
    if (empty($category) || empty($first_name) || empty($last_name) || empty($position)) {
        return true;
    } else {
        return false;
    } 
}

function no_file_uploaded(string $user_file) {
    if (isset($_FILES[$user_file]) && !empty($_FILES[$user_file]['tmp_name'])) {
        return false;
    } else {
        return true;
    }
}