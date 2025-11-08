<?php get_header(); ?>


<!-- Main -->
<main class="404-main container mt-3 text-center" id="main">
    <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
    <button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <h1 class="mb-5 text-center">404 Not Found</h1>
    
    <p>This page isn't in our library</p>
    <p>We searched the archives, the returns, even under the librarian's desk with no luck. Maybe the Dewey Decimal System misplaced it.</p>
    <p>Try visiting our <a href="faq.html">Frequently Asked Questions</a> you might find your answer there.</p>
    <p>Or ask our chatbot what you are looking for.</p>

    <div class="chatbox-container text-start">
        <h3 class="chatbox-header">Chat Box</h3>

        <div class="chatbox-messages">

        </div>

        <form class="chatbox-input-form" id="chatbox-form">
            <input type="text" class="chatbox-input" placeholder="What are you looking for?">
            <button type="submit" class="button send-button">Send</button>
        </form>

        <button class="button clear-chat-button">Clear Chat</button>
    </div>
</main>


<?php get_footer(); ?>
