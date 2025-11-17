<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>North Metropolitan Tafe Library</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" type="image/x-icon">

    <?php wp_head(); ?>
</head>
<body>


<!-- Hero Image -->
<div class="bg-image" id="home-hero-image">
    <header>
        <nav class="navbar navbar-expand-xxl py-2">
            <a href="#main" class="skip-link">Skip to main content</a>
            <div class="container-fluid">
                <div class="row w-100 align-items-center">

                    <!-- Logo -->
                    <div class="col-2 d-flex justify-content-start">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="book logo" width="50" height="50">
                    </div>

                    <!-- Nav Links -->
                    <div class="col-8 d-flex justify-content-center">
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container'      => false,
                                'menu_class'     => '',
                                'fallback_cb'    => '__return_false',
                                'items_wrap'     => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                                'depth'          => 2,
                                'walker'         => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                        </div>
                    </div>

                    <div class="font-size-contrast-buttons col-2 d-flex justify-content-end">
                        <!-- Toggler for offcanvas menu -->
                        <button class="navbar-toggler d-xxl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="font-size-contrast-buttons container collapse navbar-collapse justify-content-end">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
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
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
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
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'offcanvas-menu',
                        'container'      => false,
                        'menu_class'     => '',
                        'fallback_cb'    => '__return_false',
                        'items_wrap'     => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                        'depth'          => 2,
                        'walker'         => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
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
    <div class="container mt-5 animateTop">
        <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
        <h1 class="text-center">North Metropolitan TAFE Library</h1>
    </div>
</div>


<!-- Main -->
<main class="home-main" id="main">
    <button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <div class="container mt-5">
        <div class="row">
            
            <!-- Search Form -->
            <div class="col-xl-6 col-sm-12 mb-5 search-form">
                <h2 class="animateLeft">Search This Website</h2>

                <?php get_template_part( 'template-parts/content', 'chatbox' ); ?>
            </div>
            
            <!-- FAQ Section -->
            <div class="col-xl-6 col-sm-12 mb-5">
                <h2 class="animateRight">Frequently Asked Questions</h2>
                
                <?php
                    if (is_active_sidebar( 'widget-home-page-faq' )) {
                        dynamic_sidebar( 'widget-home-page-faq' ); 
                    }
                ?>

                <a href="<?php echo site_url().'/faq'; ?>" class="btn btn-primary mt-3">Visit More FAQ's</a>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>
