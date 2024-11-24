<?php
declare(strict_types=1);
require_once 'signup_view.inc.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function output_username() {
    if (isset($_SESSION["user_id"])) {
        echo "<p class='login_bar username'> You are logged in as " . $_SESSION["user_username"] . "</p>";
        echo '<br>';
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
    }
}

function output_sponsor_delete(array $sponsors) {
    if (isset($_SESSION["user_id"])) {
        echo '<h4>Delete Sponsor:</h4>';
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

function output_team_upload() {
    if (isset($_SESSION["user_id"])) {
        echo '<h4>Add Sponsor:</h4>';
        echo '<form action="includes/team/upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <select name="category">
                        <option value="">--Please choose an option--</option>
                        <option value="director">Director</option>
                        <option value="subsystem_lead">Subsystems Lead</option>
                    </select>
                    <input type="text" name="first_name" placeholder="Enter First Name">
                    <input type="text" name="last_name" placeholder="Enter Last Name">
                    <input type="text" name="position" placeholder="Enter Position Description">
                    <input type="text" name="linkedin" placeholder="Link to Linkedin">
                    <input type="submit" value="Upload">
                </form>';
    }

}

function output_team_delete(array $team) {
    if (isset($_SESSION["user_id"])) {
        echo '<h4>Delete Team Member Portrait:</h4>';
        echo '<form action="includes/team/delete_portrait.inc.php" method="POST" enctype="multipart/form-data">
                        <select name="photo_data">
                            <option value="">--Please choose an option--</option>';
                            echo '<option value="">--Directors--</option>';
                            
                            foreach ($team as $team_member) {
                                if ($team_member['category'] == 'director') {
                                    echo '<option value="'. $team_member['id'] .'|'. $team_member['file_path'] .'">'. $team_member['first_name'] .' '. $team_member['last_name'].'</option>';
                                }
                                
                            }
                            echo '<option value="">-------------</option>';                        
                            echo '<option value="">--Subsystems--</option>';
                            
                            foreach ($team as $team_member) {
                                if ($team_member['category'] == 'subsystem_lead') {
                                    echo '<option value="'. $team_member['id'] .'|'. $team_member['file_path'] .'">'. $team_member['first_name'] .' '. $team_member['last_name'].'</option>';
                                }
                                
                            }
                            
        echo'           </select>
                        <input type="submit" value="Delete">
                    </form>';
    }
}

function output_login_logout() {
    if (isset($_SESSION["user_id"])) {
        echo '<a class="login_logout" href="includes/logout.inc.php"><p>Logout</p></a>';
    } else {
        echo '<a class="login_logout" href="signin.php"><p>Log in</p></a>';       
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

function add_user() {
    // only for admin    
    if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] == 1) {
        echo '<h3>Create Account</h3>
            <form action="includes/signup.inc.php" method="post">';
                signup_inputs();
                echo '<button>Sign up</button>
            </form>';

        check_signup_errors();

        echo '<br><br><br>';
    }
}

function delete_account(array $users) {
    if (isset($_SESSION["user_id"]))
        echo $_SESSION["user_id"];
    if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] == 1) {
        echo '<h4>Delete Account:<h4>';
        echo '<form action="includes/team/delete_account.inc.php" method="POST" enctype="multipart/form-data">
                        <select name="account_id">
                            <option value="">--Please choose an option--</option>';
                            foreach ($users as $user) {
                                echo "1";
                                echo '<option value="'. $user['id'] .'">'. $user['username'] .'</option>';
                                
                            }
        echo'           </select>
                        <input type="submit" value="Delete">
                    </form>';
        
        if (isset($_SESSION["error_account_delete"])) {
            echo $_SESSION["error_account_delete"];
            unset($_SESSION["error_account_delete"]);
        } else if (isset($_GET["delete_account"]) && $_GET["delete_account"]=="success") {
            echo "<br>";
            echo '<p class="login_success">Successfully deleted account!';
        }
        
    }
}