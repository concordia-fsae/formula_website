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