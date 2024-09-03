<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function is_color_empty(string $color) {
    if (empty($color)) {
        return true;
    } else {
        return false;
    } 
}