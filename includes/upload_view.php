<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function output_images(array $uploaded_images, string $sponsorship_tier) {
    $count = 0;

    if ($sponsorship_tier == "title") {
        foreach ($uploaded_images as $image) {
            if($image["sponsor_tier"] == 'title') {
                if ($count == 0) {
                    $count++;
                    echo '<a href="'. $image["sponsor_website"] .'">
                        <div class="spacer" id="goTo'. $image['sponsor_name'] .'"></div>
                        <img src="'. $image['file_path'] .'" alt="">
                    </a>';
                } else {
                    if (isset($_SESSION['user_id'])) {
                        echo '<h3>TWO OR MORE TITLE SPONSORS ARE IN THE DATABASE, DELETE TILL ONLY ONE REMAINS</h3>';
                    }
                }
                

                
            }
        }
    } else if ($sponsorship_tier == "platinum") {
        foreach ($uploaded_images as $image) {
            if($image["sponsor_tier"] == 'platinum') {
                if ($count%2 == 0) {
                    echo '<div class="frameSponso hidden">';
                }
                $count++;

                echo '<a href="'. $image["sponsor_website"] .'">
                        <div class="spacer" id="goTo'. $image['sponsor_name'] .'"></div>
                        <img src="'. $image['file_path'] .'" alt="">
                    </a>';

                if ($count%2 == 0) {
                    echo '</div>';
                }
            }
            
        }
        if ($count % 2 != 0) {
            echo '</div>';
        }
    } else if ($sponsorship_tier == "gold") {
        foreach ($uploaded_images as $image) {
            if($image["sponsor_tier"] == 'gold') {
                if ($count%2 == 0) {
                    echo '<div class="frameSponso hidden">';
                }
                $count++;

                echo '<a href="'. $image["sponsor_website"] .'">
                        <div class="spacer" id="goTo'. $image['sponsor_name'] .'"></div>
                        <img src="'. $image['file_path'] .'" alt="">
                    </a>';

                if ($count%2 == 0) {
                    echo '</div>';
                }
            }
            
        }
        if ($count % 2 != 0) {
            echo '</div>';
        }
    } else if ($sponsorship_tier == "silver") {
        foreach ($uploaded_images as $image) {
            if($image["sponsor_tier"] == 'silver') {
                if ($count%2 == 0) {
                    echo '<div class="frameSponso hidden">';
                }
                $count++;

                echo '<a href="'. $image["sponsor_website"] .'">
                        <div class="spacer" id="goTo'. $image['sponsor_name'] .'"></div>
                        <img src="'. $image['file_path'] .'" alt="">
                    </a>';

                if ($count%2 == 0) {
                    echo '</div>';
                }
            }
            
        }
        if ($count % 2 != 0) {
            echo '</div>';
        }
    } else if ($sponsorship_tier == "bronze") {
        foreach ($uploaded_images as $image) {
            if($image["sponsor_tier"] == 'bronze') {
                if ($count%2 == 0) {
                    echo '<div class="frameSponso hidden">';
                }
                $count++;

                echo '<a href="'. $image["sponsor_website"] .'">
                        <div class="spacer" id="goTo'. $image['sponsor_name'] .'"></div>
                        <img src="'. $image['file_path'] .'" alt="">
                    </a>';

                if ($count%2 == 0) {
                    echo '</div>';
                }
            }
            
        }
        if ($count % 2 != 0) {
            echo '</div>';
        }
    }
}

function output_images_for_index(array $uploaded_images) {
    $count = 0;

    foreach ($uploaded_images as $image) {
        if($image["sponsor_tier"] == 'title') {
            if ($count == 0) {
                $count++;
                echo '<a href="sponsors.php#goTo'. $image["sponsor_name"] .'">
                    <img src="'. $image['file_path'] .'" alt="">
                </a>';
            }
        }
    }
    foreach ($uploaded_images as $image) {
        if($image["sponsor_tier"] == 'platinum') {
            echo '<a href="sponsors.php#goTo'. $image["sponsor_name"] .'">
                    <img src="'. $image['file_path'] .'" alt="">
                </a>';
        }
        
    }
    foreach ($uploaded_images as $image) {
        if($image["sponsor_tier"] == 'gold') {
            echo '<a href="sponsors.php#goTo'. $image["sponsor_name"] .'">
                    <img src="'. $image['file_path'] .'" alt="">
                </a>';
        }
        
    }
    foreach ($uploaded_images as $image) {
        if($image["sponsor_tier"] == 'silver') {
            echo '<a href="sponsors.php#goTo'. $image["sponsor_name"] .'">
                    <img src="'. $image['file_path'] .'" alt="">
                </a>';
        }
    }
    foreach ($uploaded_images as $image) {
        if($image["sponsor_tier"] == 'bronze') {
            echo '<a href="sponsors.php#goTo'. $image["sponsor_name"] .'">
                    <img src="'. $image['file_path'] .'" alt="">
                </a>';
        }
    }
}

function check_upload_errors() {
    if (isset($_SESSION["errors_upload"])) {
        $errors = $_SESSION["errors_upload"];
        
        foreach($errors as $error) {
            echo '<p class="upload_error">' . $error . '</p>';
        }

        unset($_SESSION["errors_upload"]);
    } else if (isset($_GET["upload"]) && $_GET["upload"]=="success") {
        echo "<br>";
        echo '<p class="upload_success">Sponsor successfully added!';
    }
}

function output_team_images(array $team, string $category) {
   
    if ($category == "director") {
        foreach ($team as $team_member) {
            if ($team_member["category"] == "director") {
                echo '<div class="profile '.$team_member["id"].' hidden noMove left">
                        <div class="goToProfile" id="goTo'.$team_member["id"].'"></div>
                        <div class="imageWrapper">
                            <img class="portrait" src="'.$team_member["file_path"].'" alt="Image Not Found">
                            ';
                            if (empty($team_member["linkedin"])) {
                                echo '
                                <a class="link nolink linkedin">
                                ';
                            } else {
                                echo '
                                <a class="link linkedin" href="'.$team_member["linkedin"].'">
                                ';
                            }
                            echo'
                                <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                    <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                                </svg>
                            </a>
                        </div>
                        <p class="first">'.$team_member["first_name"].' <span class="last"><br>'.$team_member["last_name"].'</span></p>
                        <p class="position">'.$team_member["position"].'</p>
                    </div>';
            }
        }
    } else if ($category == "subsystem_lead") {
        foreach ($team as $team_member) {
            if ($team_member["category"] == "subsystem_lead") {
                echo '<div class="profile subs '.$team_member["id"].' hidden noMove left">
                    <div class="goToProfile" id="goTo'.$team_member["id"].'"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="'.$team_member["file_path"].'" alt="Image Not Found">';
                        if (empty($team_member["linkedin"])) {
                            echo '
                            <a class="link nolink linkedin">
                            ';
                        } else {
                            echo '
                            <a class="link linkedin" href="'.$team_member["linkedin"].'">
                            ';
                        }
                        echo'
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">'.$team_member["first_name"].' <span class="last"><br>'.$team_member["last_name"].'</span></p>
                    <p class="position">'.$team_member["position"].'</p>
                </div>';
            }
        }
    }
}

function output_team_for_index(array $team) {
    $count = 0;

    foreach ($team as $team_member) {
        if($team_member["category"] == 'director') {
            if ($count == 0) {
                $count++;
                echo '<div class="profile '.$team_member['id'].'">
                        <div class="imageWrapper">
                                <img class="portrait" src="'. $team_member['file_path'] .'" alt="">
                                <a class="link linkedin" href="team.php#goTo'. $team_member['id'] .'"></a>
                            </div>
                        <p class="first">'. $team_member['first_name'] .' <span class="last"><br>'. $team_member['last_name'] .'</span></p>
                    </div>';
            }
        }
    }
    foreach ($team as $team_member) {
        if($team_member["category"] == 'subsystem_lead') {
            echo '<div class="profile '.$team_member['id'].'">
                        <div class="imageWrapper">
                                <img class="portrait" src="'. $team_member['file_path'] .'" alt="">
                                <a class="link linkedin" href="team.php#goTo'. $team_member['id'] .'"></a>
                            </div>
                        <p class="first">'. $team_member['first_name'] .' <span class="last"><br>'. $team_member['last_name'] .'</span></p>
                    </div>';
        }
        
    }
}