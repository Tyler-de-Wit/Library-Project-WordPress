<?php get_header(); ?>


<!-- Main -->
<main class="login-to-wifi-main container mt-3" id="main">
    <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
    <h1 class="mb-5 text-center">Login To WIFI</h1>

    <div class="container-fluid">
        <div class="row">
            <!-- Warnings -->
            <section class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateLeft">Warnings</h2>
                    </div>
                    <div class="card-body">
                        <p class="warning-text">It may take up to 24-48 hours after completing your enrolment for your account to become active in all our online systems.</p>
                        <p>Before you log onto the Campus WIFI you need to activate your student Microsoft 365. Instructions for which can be found at the bottom of this page and at <a href="<?php echo site_url().'/microsoft-setup'; ?>">Microsoft Setup</a></p>
                    </div>
                </div>
            </section>

            <!-- Connect To The Student WIFI -->
            <section class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateRight">Connect To The Studnet WIFI</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><span class="bold-text">iOS</span> - Settings > WiFi > NMT WiFi </li>
                            <li><span class="bold-text">Android</span> - Settings > Network & Internet > WiFi > NMT WiFi </li>
                            <li><span class="bold-text">Windows</span> - Click on the WiFi logo on the bottom right hand corner of the screen and select NMT WiFi </li>
                            <li><span class="bold-text">MacOS</span> - Click on the  WiFi logo on the Menu bar, and select NMT WiFi from the list</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <!-- Login To The Student WIFI -->
            <section class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateLeft">Login To The Studnet WIFI</h2>
                    </div>
                    <div class="card-body">
                        <p>The NMT WiFi login page should load automatically. If it doesn't, go to <a href="http://neverssl.com/" target="_blank">neverssl.com</a> to force the login page to appear.</p>
                        <p>Enter your login details:</p>
                        <div class="container mb-3">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <span class="bold-text">Username:</span>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="m-0">Student ID Number</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <span class="bold-text">Password:</span>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="m-0">Your Password (remember, you must change the default password first!)</p>
                                </div>
                            </div>
                        </div>
                        <p>Once you have logged in, you will not need to log in again for 90 days. However, you will need to log in again if you change your password during this time. If you have any issues connecting to the WiFi, take your device to your campus Library for assistance.</p>
                        <p class="warning-text">Warning: If you are running a Bit Torrent when you try to log in to the WiFi your device will be quarantined and you will not be able to log in.</p>
                    </div>
                </div>
            </section>

            <!-- Password Expiry -->
            <section class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateRight">Password Expiry</h2>
                    </div>
                    <div class="card-body">
                        <p>Your password will expire every 6 months - <span class="bold-text">you MUST change it</span> before it expires or you will be locked out of all our online systems.</p>
                        <p>You can change your password on a Student PC by using CTRL+ALT+DELETE and choosing Change a Password.</p>
                        <p>Or via the settings in Microsoft 365 (student email) - click on the settings cog in the top right hand corner of your Microsoft 365 account and choose change your password.</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <!-- Password Requirements -->
            <section class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateLeft">Password Requirements</h2>
                    </div>
                    <div class="card-body">
                        <p>Your new password can use any combination of letters or numbers but must be a minimum of 14 characters. </p>
                        <p><span class="bold-text">Tip:</span> Use words or phrases you are going to remember. </p>
                        <p>If you are having problems changing your password please contact your <a href="https://guides.dtwd.wa.gov.au/nmtafe-library/ContactUs" target="_blank">Campus Library</a></p>
                    </div>
                </div>
            </section>

            <!-- Links -->
            <section class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateRight">Helpful Links</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><a href="https://northmetrotafe.libanswers.com/faq/269161" target="_blank">How do I access my Microsoft 365 / Student Email?</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>


<?php get_footer(); ?>
