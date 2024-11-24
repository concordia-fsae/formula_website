<?php 
require_once 'includes/config/config_session.inc.php';
require_once 'includes/login_view.inc.php';
require_once 'includes/upload_view.php';
require_once 'includes/upload_model.php';
require_once 'includes/config/dbh.inc.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>
        <?php
        output_username();
        ?>
        
    </h3>

    <h3>LOGIN</h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>

   <?php 
   check_login_errors();
   ?>

    <h3>Go Back To Home Page</h3>

    <form action="index.php" method="post">
        <button>Home Page</button>
    </form>

</body>
</html>