<?php get_header(); ?>


<!-- Main -->
<main class="faq-main container mt-3" id="main">
    <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
    <button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <h1 class="mb-5 text-center">Frequently Asked Questions</h1>

    <!-- Search Form -->
    <div class="mb-5 text-center">
        <h2>Search This Website</h2>

        <?php get_search_form(); ?>
    </div>


    <!-- New Students -->
    <h2 class="animateLeft">New Students</h2>
    <?php
        if (is_active_sidebar( 'widget-faq-page-new-students' )) {
            dynamic_sidebar( 'widget-faq-page-new-students' ); 
        }
    ?>

    <!-- Library Help -->
    <h2 class="animateLeft">Library Help</h2>
    <?php
        if (is_active_sidebar( 'widget-faq-page-library-help' )) {
            dynamic_sidebar( 'widget-faq-page-library-help' ); 
        }
    ?>

    <!-- Other Questions -->
    <h2 class="animateLeft">Other Questions</h2>
    <?php
        if (is_active_sidebar( 'widget-faq-page-other-questions' )) {
            dynamic_sidebar( 'widget-faq-page-other-questions' ); 
        }
    ?>

</main>


<?php get_footer(); ?>
