<?php 
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
require_once 'includes/upload_view.php';
require_once 'includes/upload_model.php';
require_once 'includes/bg_model.inc.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet the directors, leads and senior members of Concordia Formula Racing.">
    <title>Our Team</title>
    <link rel="stylesheet" href="team.css">
    <link rel="icon" type="image/x-icon" href="assets/favicons/favicon.png">
    <!-- <link href='assets/HelveticaNeueMedium.ttf' rel='stylesheet' type='text/css'> -->
    <script type="module" src="team.js"></script>
</head>
<body>

    <?php 
        output_username();
    ?>
    <div class="wrapper">
        <header class="hidden">
            <a href="./" class="Logo">
                <img class="headerLogo" src="assets/logo/headerLogo.png" alt="">
            </a>

            <nav>
                <svg class="close" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="style=bulk">
                    <g id="close">
                    <path id="rectangle" d="M1.25 7.25C1.25 3.93629 3.93629 1.25 7.25 1.25H16.75C20.0637 1.25 22.75 3.93629 22.75 7.25V16.75C22.75 20.0637 20.0637 22.75 16.75 22.75H7.25C3.93629 22.75 1.25 20.0637 1.25 16.75V7.25Z" fill="white"/>
                    <path id="vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M7.18298 7.18298C7.42696 6.93901 7.82253 6.93901 8.06651 7.18298L16.817 15.9335C17.061 16.1775 17.061 16.573 16.817 16.817C16.573 17.061 16.1775 17.061 15.9335 16.817L7.18298 8.06651C6.93901 7.82253 6.93901 7.42696 7.18298 7.18298Z" fill="#000000"/>
                    <path id="vector (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd" d="M16.817 7.18299C17.061 7.42697 17.061 7.82254 16.817 8.06652L8.0665 16.817C7.82252 17.061 7.42695 17.061 7.18298 16.817C6.939 16.573 6.93901 16.1775 7.18299 15.9335L15.9335 7.18298C16.1775 6.939 16.573 6.93901 16.817 7.18299Z" fill="#000000"/>
                    </g>
                    </g>
                </svg>
                    
                <ul>
                    <li><a class="burger-items hide" id="home" href="./">HOME</a></li>
                    <li><a class="burger-items" id="aboutUs" href="./#scrollToIntro">ABOUT US</a></li>
                    <li><a class="burger-items" id="subsystems" href="./#scrollToSubs">SUBSYSTEMS</a></li>
                    <li><a class="burger-items" href="team.php">MEET THE TEAM</a></li>
                    <li><a class="burger-items" href="sponsors.php">SPONSOR US</a></li>
                    <li><a class="burger-items" id="contact" href="#scrollBottom">CONTACT</a></li>
                </ul>
            </nav>

            <svg class="menu" id="desktop-menu" width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="black"/>
            </svg>
        </header>

        <!-- create space for the header -->
        <section class="whiteSpace" style="height: 10vh;"></section> 
        <!-- THE TEAM SECTION -->
        <section class="theTitle hidden">
            <img src="assets/backgrounds/TeamImageLowQuality.jpg" alt="">
            <h1>THE TEAM</h1>
        </section>
        
        <section class="whiteSpace"></section>


        
        <section class="directors">
            <div class="titleFrame hidden noMove left">
                <h1 class="title">Directors</h1>
            </div>

            <div class="profiles director">

                <div class="profile austin hidden noMove left">
                    <div class="goToProfile" id="goToAustin"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Austin.JPG" alt="">
                        <!-- class nolink to make profile unclickable and no href for the account, to be changed when linkedin wanted -->
                        <a class="link nolink linkedin">
                            <!-- for no link to linkedin -->
                            <!-- <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg> -->
                        </a>
                    </div>
                    <p class="first">Austin <span class="last"><br>UNRUH</span></p>
                    <p class="position">Coordinator</p>
                </div>
                <div class="profile joshua hidden noMove left">
                    <div class="goToProfile" id="goToJoshua"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Joshua.JPG" alt="">
                        <!-- class nolink to make profile unclickable and no href for the account, to be changed when linkedin wanted -->
                        <a class="link nolink linkedin">
                            <!-- for no link to linkedin -->
                            <!-- <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg> -->
                        </a>
                    </div>
                    <p class="first">Joshua <span class="last"><br>LAFLEUR</span></p>
                    <p class="position">Electrical Director</p>
                </div>
                <div class="profile james hidden noMove left">
                    <div class="goToProfile" id="goToJames"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/James.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/jamie-savelson-a10666162?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">James <span class="last"><br>SAVELSON</span></p>
                    <p class="position">Operations Director</p>
                </div>
                <div class="profile peter hidden noMove left">
                    <div class="goToProfile" id="goToPeter"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Peter.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/petervhopkins/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Peter <span class="last"><br>HOPKINS</span></p>
                    <p class="position">Mechanical Director</p>
                </div>
            </div>
        </section>

        <section class="subsystems">
            <div class="titleFrame subsystems hidden noMove left">
                <h1 class="title subsystems">Subsystems</h1>
            </div>

            <!-- FIRST DESIGN FOR DESKTOP ONLY (OVER 750PX), DISACTIVATED WHEN IN MOBILE MODE -->
            <!-- (no group, 3 per groupSec, displayed through css) -->
            <div class="profiles">
                <div class="profile subs peter hidden noMove left">
                    <!-- indicator not needed (peter is in the director section) -->
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Peter.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/petervhopkins/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Peter <span class="last"><br>HOPKINS</span></p>
                    <p class="position">Chassis Lead</p>
                </div>
                <div class="profile subs matthieu hidden noMove left">
                    <div class="goToProfile" id="goToMatthieu"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Matthieu.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/matthieuvdw/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Matthieu <span class="last"><br>VANDEWYNCKELE</span></p>
                    <p class="position">Drivetrain Lead</p>
                </div>
                <div class="profile subs james hidden noMove left">
                    <div class="goToProfile" id="goToJames"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/James.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/jamie-savelson-a10666162?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">James <span class="last"><br>SAVELSON</span></p>
                    <p class="position">Steering Lead</p>
                </div>
                <div class="profile subs sabrina hidden noMove left">
                    <div class="goToProfile" id="goToSabrina"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Sabrina.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/sabrina-par%C3%A9-l%C3%A9onard-447138106/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Sabrina <span class="last"><br>PARE-LEONARD</span></p>
                    <p class="position">Brakes Lead</p>
                </div>
                <div class="profile subs leandre hidden noMove left">
                    <div class="goToProfile" id="goToLeandre"></div>
                    <div class="imageWrapper">
                        
                        <img class="portrait" src="assets/portraits/Leandre.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/leandre-guertin-jodoin?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Leandre <span class="last leandre"><br>GUERTIN-JODOIN</span></p>
                    <p class="position">Suspension Lead</p>
                </div>

                <div class="profile subs philippe hidden noMove left">
                    <div class="goToProfile" id="goToPhilippe"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Philippe.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/philippe-andrew-grimard-aerospace-engineering-and-concordiaformularacing?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Philippe Andrew<span class="last"><br>GRIMARD</span></p>
                    <p class="position">Aerodynamics Co-Lead</p>
                </div>
                <div class="profile subs jacob hidden noMove left">
                    <div class="goToProfile" id="goToJacob"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/jacob.png" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/jacobgarellek/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Jacob <span class="last"><br>GARELLEK</span></p>
                    <p class="position">Aerodynamics Co-Lead</p>
                </div>

                <div class="profile subs jason hidden noMove left">
                    <div class="goToProfile" id="goToJason"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Jason.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/jasonzalass/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Jason <span class="last"><br>ZALASS</span></p>
                    <p class="position">Electrical Hardware Lead</p>
                </div>
              
                <div class="profile subs lucas hidden noMove left">
                    <div class="goToProfile" id="goToLucas"></div>
                    <div class="imageWrapper">
                        <img class="portrait" src="assets/portraits/Lucas.JPG" alt="">
                        <a class="link linkedin" href="https://www.linkedin.com/in/lucas-graham-68978817a/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="first">Lucas <span class="last"><br>GRAHAM</span></p>
                    <p class="position">Senior Member of the Electrical Subteam</p>
                </div>
            </div>
        </section>
        

        <section class="contact" id="scrollBottom">
            <div class="title contact">CONTACT</div>
            <div class="contactFrame">
                <div class="socialAndCredentials hidden noMove left">
                    <div class="credentials">
                        <!-- credentials of the team -->
                        
                        <p class="contactText"> <a href="mailto:formula@ecaconcordia.ca" class="contactText mail">formula@ecaconcordia.ca</a></p>
                        <p class="contactText"> 1455 Boul. de Maisonneuve O., H-022, Montreal, QC, H3G 1M8</p>
                        <p class="contactText"> (514) 848-2424</p>
                        <p class="contactText"> <a href="https://www.concordiasae.ca/" class="contactText mail">concordiasae.ca</a></p>
                                                
                    </div>
                    <div class="socials">
                        <!-- three elements which link to the socials of SAE with social media icons -->
                        <a class="link instagram" href="https://www.instagram.com/concordiaformularacing/">
                            <svg class="social instagram" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" fill="white">
                                <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"></path>
                            </svg> 
                        </a>
                        <a class="link facebook" href="https://www.facebook.com/ConcordiaFormulaRacing/">
                            <svg class="social facebook" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="white">
                                <path  d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"></path>
                            </svg>
                        </a>
                        <a class="link linkedin" href="https://www.linkedin.com/company/concordiaformularacing/">
                            <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="white">
                                <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                            </svg>
                        </a>

                    </div>
                </div>
                
                <!-- this element designates the google map icon, and is located here for the position on the page -->
                <div id="map" class="hidden noMove right"></div>
            </div>
        </section>
        
        <section class="creator">
            <div class="flex">
                <p><span>Designed By:</span> Leo Thomasson</p>
                <a class="linkedin" href="https://www.linkedin.com/in/leo-thomasson-110243247/">
                    <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="white">
                        <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                    </svg>
                </a>
            </div>
            <h3>-</h3>
            <?php
                output_login_logout();
            ?>
        </section>
    </div>
    
    <!-- this is a java, part of the program copy pasted for the google maps -->
    <script>
        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
        key: "AIzaSyAM1xr-iAKQjB8sJ014XiIUX5Or8o3XBrc",
        v: "weekly",
        // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
        // Add other bootstrap parameters as needed, using camel case.
        });
    </script>
</body>
</html>