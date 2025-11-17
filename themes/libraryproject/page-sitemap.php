<?php get_header(); ?>


<!-- Main -->
<main class="sitemap-main container mt-3" id="main">
    <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
    <button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <h1 class="mb-5 text-center">NMT Library Sitemap</h1>

    <!-- Search Form -->
    <div class="mb-5 text-center">
        <h2>Search This Website</h2>

        <?php get_search_form(); ?>
    </div>

    <div class="row justify-content-center">
        <!-- Main Pages -->
        <div class="col-xl-4 col-sm-12 mb-5">
            <ul>
                <li class="list-unstyled"><h2 class="animateLeft">Main Pages</h2></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="<?php echo site_url().'/faq'; ?>">Frequently Asked Questions</a></li>
                <li><a href="<?php echo site_url().'/contact'; ?>">Contact</a></li>
                <li><a href="<?php echo site_url().'/blog'; ?>">Blog</a></li>
            </ul>
        </div>

        <!-- Getting Online -->
        <div class="col-xl-4 col-sm-12 mb-5">
            <ul>
                <li class="list-unstyled"><h2 class="animateRight">Getting Online</h2></li>
                <li><a href="<?php echo site_url().'/microsoft-setup'; ?>">Microsoft 365 & Multi-Factor Authentication Setup</a></li>
                <li><a href="<?php echo site_url().'/login-to-wifi'; ?>">Login To Campus WIFI</a></li>
                <li><a href="<?php echo site_url().'/access-blackboard'; ?>">How To Access Blackboard</a></li>
                <li><a href="<?php echo site_url().'/locating-timetable'; ?>">Locating Your Timetable</a></li>
                <li><a href="<?php echo site_url().'/password-help'; ?>">Everything You Need To Know About Passwords</a></li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <!-- Important Resources -->
        <div class="col-xl-4 col-sm-12 mb-5">
            <ul>
                <li class="list-unstyled"><h2 class="animateLeft">Important Resources</h2></li>
                <li><a href="<?php echo site_url().'/library-printers'; ?>">Using The Library Printers</a></li>
                <li><a href="<?php echo site_url().'/student-portal'; ?>">Accessing The Student Portal</a></li>
                <li><a href="<?php echo site_url().'/online-resources'; ?>">Online Resources</a></li>
                <li><a href="<?php echo site_url().'/student-card'; ?>">How Do I Get My Student Card</a></li>
                <li><a href="<?php echo site_url().'/library-study-rooms'; ?>">Using The Library Study Rooms</a></li>
            </ul>
        </div>

        <!-- Helpful Links -->
        <div class="col-xl-4 col-sm-12 mb-5">
            <ul>
                <li class="list-unstyled"><h2 class="animateRight">Helpful Links</h2></li>
                <li><a href="<?php echo site_url().'/referencing'; ?>">How To Reference Your Work Correctly</a></li>
                <li><a href="<?php echo site_url().'/email-tips'; ?>">Email Tips And Tricks</a></li>
                <li><a href="<?php echo site_url().'/student-discount'; ?>">Unlocking Student Discount On Your SmartRider</a></li>
                <li><a href="<?php echo site_url().'/tafe-contacts'; ?>">Useful Contacts At TAFE</a></li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <!-- External Links -->
        <div class="col-xl-4 col-sm-12 mb-5">
            <ul>
                <li class="list-unstyled"><h2 class="animateLeft">External Links</h2></li>
                <li><a href="https://help.blackboard.com/" target="_blank">Blackboard Help</a></li>
                <li><a href="https://help.blackboard.com/Collaborate/Ultra/Participant" target="_blank">Collaborate Help For Students</a></li>
                <li><a href="https://nmtafe.t1cloud.com/T1Default/CiAnywhere/web/NMTAFE/LogOn/$S1_STU" target="_blank">Student Portal</a></li>
                <li><a href="https://guides.dtwd.wa.gov.au/nmtafe-library/newstudents" target="_blank">New Students</a></li>
                <li><a href="https://guides.dtwd.wa.gov.au/az/northmetro" target="_blank">Online Resources</a></li>
                <li><a href="https://www.mybib.com/tools/apa-citation-generator" target="_blank">APA Citation Generator</a></li>
                <li><a href="https://guides.dtwd.wa.gov.au/nmtafe-apa" target="_blank">APA Referencing Guide</a></li>
                <li><a href="http://neverssl.com/" target="_blank">NMT WiFi login page</a></li>
                <li><a href="https://www.northmetrotafe.wa.edu.au/timetables" target="_blank">North Metropolitan Tafe Timetables</a></li>
                <li><a href="https://guides.dtwd.wa.gov.au/nmtafe-library/ContactUs" target="_blank">Contact information for every campus library</a></li>
                <li><a href="https://northmetrotafe.libanswers.com/faq/269162" target="_blank">How do I login to the Campus WiFi?</a></li>
                <li><a href="https://northmetrotafe.libanswers.com/faq/277356" target="_blank">Print using your own device with Mobility Print</a></li>
                <li><a href="https://northmetrotafe.libanswers.com/faq/264857" target="_blank">How do I print, photocopy or scan?</a></li>
                <li><a href="https://print.nmtafe.wa.edu.au/user" target="_blank">PaperCut MF</a></li>
                <li><a href="https://login.microsoftonline.com/" target="_blank">Login To Microsoft 365</a></li>
                <li><a href="https://passwordreset.microsoftonline.com" target="_blank">Reset your Microsoft password</a></li>
                <li><a href="https://support.microsoft.com/en-us/microsoft-365" target="_blank">Microsoft Support</a></li>
                <li><a href="https://northmetrotafe.libanswers.com/faq/269161" target="_blank">FAQ How do I access my Microsoft 365 / Student Email?</a></li>
                <li><a href="https://northmetrotafe.libanswers.com/faq/275738" target="_blank">Multi-factor Authentication and Microsoft365 Setup in Languages Other than English</a></li>
                <li><a href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en_AU" target="_blank">Download Microsoft authenticator for Android</a></li>
                <li><a href="https://apps.apple.com/au/app/microsoft-authenticator/id983156458" target="_blank">Download Microsoft authenticator for Apple</a></li>
            </ul>
        </div>

        <!-- PDF Resources -->
        <div class="col-xl-4 col-sm-12 mb-5">
            <ul>
                <li class="list-unstyled"><h2 class="animateRight">PDF Resources</h2></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/navigating_the_student_portal.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Navigating the Student Portal</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/printing_on_nmtafe_computers_using_ipad_and_iphone.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Print using iPad and iPhone</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/printing_on_nmtafe_computers_using_mac.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Print using Mac</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/printing_on_nmtafe_computers_using_chrome_os.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Print using Chrome OS</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/printing_on_nmtafe_printers_using_windows.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Print using Windows</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/printing_on_nmtafe_printers_using_android.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Print using Android</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/change_password_in_microsoft_365.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Change Password In Microsoft 365</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/reset_password_using_email_and_phone.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Reset Password Using Email And Phone</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/reset_password_using_microsoft_authenticator.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Reset Password Using Microsoft Authenticator</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/set_up_microsoft_authenticator_with_phone_and_pc.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Set Up Microsoft Authenticator Phone And PC</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/set_up_microsoft_authenticator_with_phone_only.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Set Up Microsoft Authenticator Phone Only</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/assets/documents/foi_information_statement_(G030E1).pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Information Statement (362 KB) (PDF document) (362 KB)</a></li>
            </ul>
        </div>
    </div>
</main>


<?php get_footer(); ?>
