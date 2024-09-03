<?php 
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
require_once 'includes/upload_view.php';
require_once 'includes/upload_model.php';
require_once 'includes/bg_model.inc.php';

//$bg_color = getBackgroundColor($pdo)['setting_value'];

if(isset($_SESSION['uploaded_sponsors'])) {
    $uploaded_sponsors = $_SESSION['uploaded_sponsors'];
} else {
    $uploaded_sponsors = get_sponsors($pdo);
}


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
    <style>
        /* body {
            background-color: <?php echo htmlspecialchars($_SESSION["background_color"] ?? $bg_color); ?>;
        } */
        img {
            width: 100%;
        }
    </style>
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

    <h3>SIGN UP</h3>

    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_inputs();
        ?>
        <button>Sign up</button>
    </form>

    <?php
    check_signup_errors();
    ?>

    <h3>Logout</h3>

    <form action="includes/logout.inc.php" method="post">
        <button>Logout</button>
    </form>

    <?php 
        output_images($uploaded_sponsors,'platinum');
    ?>

</body>
</html>