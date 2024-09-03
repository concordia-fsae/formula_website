<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (isset($_SESSION["user_id"])){
    // updates session ID every 30 min
    if(!isset($_SESSION['last_regeneration'])) {
        regenerate_session_id_logged_in();
    } else {
        $interval = 60 * 30; // 30 min 

        if(time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_id_logged_in();
        }
    }
} else {
    // updates session ID every 30 min
    if(!isset($_SESSION['last_regeneration'])) {
        regenerate_session_id();
    } else {
        $interval = 60 * 30; // 30 min 

        if(time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_id();
        }
    }
}



function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}

function regenerate_session_id_logged_in() {
    session_regenerate_id(true);

    $userID = $_SESSION["user_id"];

    $newSessionId = session_create_id(); 
    $sessionId = $newSessionId . "_" . $userID;
    session_id($sessionId);

    $_SESSION['last_regeneration'] = time();
}