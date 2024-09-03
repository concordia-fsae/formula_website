<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function output_username() {
    if (isset($_SESSION["user_id"])) {
        echo "<p class='login_bar username'> You are logged in as " . $_SESSION["user_username"] . "</p>";
        echo '<br>';
        
    } else {
        echo "You are not logged in";
    }
}
function output_sponsor_uploads() {
    if (isset($_SESSION["user_id"])) {
        echo '<h4>Add Sponsor:</h4>';
        echo '<form action="includes/upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <select name="sponsor_tier">
                        <option value="">--Please choose an option--</option>
                        <option value="bronze">Bronze</option>
                        <option value="silver">Silver</option>
                        <option value="gold">Gold</option>
                        <option value="platinum">Platinum</option>
                        <option value="title">Title</option>
                    </select>
                    <input type="text" name="sponsor_name" placeholder="Enter Name-NO SPACES">
                    <input type="text" name="sponsor_website" placeholder="Enter website link">
                    <input type="submit" value="Upload">
                </form>';
    } else {
        echo "You are not logged in";       
    }
}

function output_sponsor_delete(array $sponsors) {
    if (isset($_SESSION["user_id"])) {
        echo '<h4>Delete Sponsor:<h4>';
        echo '<form action="includes/delete_sponsor.inc.php" method="POST" enctype="multipart/form-data">
                        <select name="sponsor_path">
                            <option value="">--Please choose an option--</option>';
                            echo '<option value="">--Title--</option>';
                            
                            foreach ($sponsors as $sponsor) {
                                if ($sponsor['sponsor_tier'] == 'title') {
                                    echo '<option value="'. $sponsor['file_path'] .'">'. $sponsor['sponsor_name'] .'</option>';
                                }
                                
                            }
                            echo '<option value="">-------------</option>';                        
                            echo '<option value="">--Platinum--</option>';
                            
                            foreach ($sponsors as $sponsor) {
                                if ($sponsor['sponsor_tier'] == 'platinum') {
                                    echo '<option value="'. $sponsor['file_path'] .'">'. $sponsor['sponsor_name'] .'</option>';
                                }
                                
                            }
                            echo '<option value="">---------</option>';
                            echo '<option value="">--Gold--</option>';
                            
                            foreach ($sponsors as $sponsor) {
                                if ($sponsor['sponsor_tier'] == 'gold') {
                                    echo '<option value="'. $sponsor['file_path'] .'">'. $sponsor['sponsor_name'] .'</option>';
                                }
                                
                            }
                            echo '<option value="">----------</option>';                           
                            echo '<option value="">--Silver--</option>';
                            
                            foreach ($sponsors as $sponsor) {
                                if ($sponsor['sponsor_tier'] == 'silver') {
                                    echo '<option value="'. $sponsor['file_path'] .'">'. $sponsor['sponsor_name'] .'</option>';
                                }
                                
                            }
                            echo '<option value="">------------</option>';
                            echo '<option value="">--Bronze--</option>';
                            
                            foreach ($sponsors as $sponsor) {
                                if ($sponsor['sponsor_tier'] == 'bronze') {
                                    echo '<option value="'. $sponsor['file_path'] .'">'. $sponsor['sponsor_name'] .'</option>';
                                }
                                
                            }
                            
        echo'           </select>
                        <input type="submit" value="Delete">
                    </form>';
    }
}

function output_login_logout() {
    if (isset($_SESSION["user_id"])) {
        echo '<a href="includes/logout.inc.php">Logout</a>';
    } else {
        echo '<a href="signin.php">Log in</a>';       
    }
}

function check_login_errors(){
    if(isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p class="login_error">' . $error . '</p>';
        }

        unset($_SESSION["errors_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"]=="success") {
        echo "<br>";
        echo '<p class="login_success">Successfully logged in!';
    }
}