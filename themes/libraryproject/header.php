<!DOCTYPE html>
<html lang="en-au">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
        if (get_the_title() == null) {
            echo 'Home';
        } else {
            echo get_the_title();
        }
    ?>
    </title>
    <link rel="shortcut icon" href="images/logo-dark.png" type="image/x-icon">

    <?php wp_head(); ?>
</head>
<body>


<!-- Header -->
<header>
    <nav class="navbar fixed-top navbar-expand-xxl py-2" id="separate-navbar">
        <a href="#main" class="skip-link">Skip to main content</a>
        <div class="container-fluid">
            <div class="row w-100 align-items-center">

                <!-- Logo -->
                <div class="col-2 d-flex justify-content-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png" alt="book logo" width="50" height="50">
                </div>

                <!-- Nav Links -->
                <div class="col-8 d-flex justify-content-center">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <button class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    Getting Online
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="microsoft-setup.html">Microsoft 365 & Multi-Factor Authentication Setup</a></li>
                                    <li><a class="dropdown-item" href="login-to-wifi.html">Login To Campus WIFI</a></li>
                                    <li><a class="dropdown-item" href="access-blackboard.html">How To Access Blackboard</a></li>
                                    <li><a class="dropdown-item" href="locating-timetable.html">Locating Your Timetable</a></li>
                                    <li><a class="dropdown-item" href="password-help.html">Everything You Need To Know About Passwords</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <button class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    Important Resources
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="library-printers.html">Using The Library Printers</a></li>
                                    <li><a class="dropdown-item" href="student-portal.html">Accessing The Student Portal</a></li>
                                    <li><a class="dropdown-item" href="online-resources.html">Online Resources</a></li>
                                    <li><a class="dropdown-item" href="student-card.html">How Do I Get My Student Card</a></li>
                                    <li><a class="dropdown-item" href="library-study-rooms.html">Using The Library Study Rooms</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <button class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    Helpful Links
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="referencing.html">How To Reference Your Work Correctly</a></li>
                                    <li><a class="dropdown-item" href="email-tips.html">Email Tips And Tricks</a></li>
                                    <li><a class="dropdown-item" href="student-discount.html">Unlocking Student Discount On Your SmartRider</a></li>
                                    <li><a class="dropdown-item" href="tafe-contacts.html">Useful Contacts At TAFE</a></li>
                                    <li><a class="dropdown-item" href="faq.html">Frequently Asked Questions</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="font-size-contrast-buttons col-2 d-flex justify-content-end">
                    <!-- Toggler for offcanvas menu -->
                    <button class="navbar-toggler d-xxl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="font-size-contrast-buttons container collapse navbar-collapse justify-content-end">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                Change Font Size
                            </button>
                            <ul class="dropdown-menu">
                                <!-- Font Size Buttons -->
                                <li>
                                    <button class="btn btn-font-size" type="button" id="increase-font-size-button">Increase Font Size</button>
                                    <button class="btn btn-font-size" type="button" id="decrease-font-size-button">Decrease Font Size</button>
                                    <button class="btn btn-font-size" type="button" id="reset-font-size-button">Reset Font Size</button>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                Change Colour Contrast
                            </button>
                            <ul class="dropdown-menu">
                                <!-- Contrast Buttons -->
                                <li>
                                    <button class="btn btn-contrast" type="button" id="increase-contrast-button">Increase Contrast</button>
                                    <button class="btn btn-contrast" type="button" id="decrease-contrast-button">Reset Contrast</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-end d-xxl-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">

            <!-- Header -->
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!-- Nav Links -->
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                            Getting Online
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="microsoft-setup.html">Microsoft 365 & Authenticator</a></li>
                            <li><a class="dropdown-item" href="login-to-wifi.html">Login To Campus WIFI</a></li>
                            <li><a class="dropdown-item" href="access-blackboard.html">How To Access Blackboard</a></li>
                            <li><a class="dropdown-item" href="locating-timetable.html">Locating Your Timetable</a></li>
                            <li><a class="dropdown-item" href="password-help.html">Password Help</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                            Important Resources
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="library-printers.html">Using The Library Printers</a></li>
                            <li><a class="dropdown-item" href="student-portal.html">Accessing The Student Portal</a></li>
                            <li><a class="dropdown-item" href="online-resources.html">Online Resources</a></li>
                            <li><a class="dropdown-item" href="student-card.html">How Do I Get My Student Card</a></li>
                            <li><a class="dropdown-item" href="library-study-rooms.html">Using The Library Study Rooms</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                            Helpful Links
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="referencing.html">How To Reference Your Work Correctly</a></li>
                            <li><a class="dropdown-item" href="email-tips.html">Email Tips And Tricks</a></li>
                            <li><a class="dropdown-item" href="student-discount.html">Smart Rider Student Discount</a></li>
                            <li><a class="dropdown-item" href="tafe-contacts.html">Useful Contacts At TAFE</a></li>
                            <li><a class="dropdown-item" href="faq.html">Frequently Asked Questions</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Font Size And Contrast Buttons -->
            <div class="offcanvas-buttons container">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-font-size" type="button" id="offcanvas-increase-font-size-button">Increase Font Size</button>
                        <button class="btn btn-contrast" type="button" id="offcanvas-increase-contrast-button">Increase Contrast</button>
                        <button class="btn btn-font-size" type="button" id="offcanvas-reset-font-size-button">Reset Font Size</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-font-size" type="button" id="offcanvas-decrease-font-size-button">Decrease Font Size</button>
                        <button class="btn btn-contrast" type="button" id="offcanvas-decrease-contrast-button">Reset Contrast</button>
                    </div>
                </div>                
            </div>
        </div>
    </nav>
</header>
