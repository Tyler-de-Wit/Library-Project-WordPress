<?php get_header(); ?>


<!-- Main -->
<main class="microsoft-setup-main container mt-3" id="main">
    <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
    <button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <h1 class="mb-5 text-center">Microsoft 365 and Multi-Factor Authentication Setup</h1>
    
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-12">
                <!-- Warnings -->
                <section>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateLeft">Warnings</h2>
                        </div>
                        <div class="card-body">
                            <p class="warning-text">It may take up to 24-48 hours after completing your enrolment for your account to become active in all our online systems.</p>
                            <p><span class="bold-text">For RETURNING students</span> use your previously created password or use this link to reset your password: <a href="https://passwordreset.microsoftonline.com" target="_blank">https://passwordreset.microsoftonline.com</a></p>
                            <p><span class="bold-text">Important:</span> Access to your Microsoft 365 account will be disabled and deleted 85 days after you complete your studies or withdraw from a course.  You are encouraged to copy any data you require to an alternate service prior to access being removed.  It is not possible for data to be restored after this time. You may lose access to Blackboard immediately following your withdrawal.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12 col-lg-6">
                <!-- Microsoft 365 Setup -->
                <section>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateLeft">Microsoft 365 Setup</h2>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">Access Microsoft 365 via the link below:</p>
                            <a href="https://login.microsoftonline.com/" target="_blank">https://login.microsoftonline.com/</a>
                            
                            <h3 class="mt-3 mb-3 fs-4">Login to Student Email / Microsoft 365 for the First Time</h3>
                            <div class="container mb-3">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <span class="bold-text">Email:</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="m-0">Student ID Number@tafe.wa.edu.au</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <span class="bold-text">Password:</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="m-0">Your default password (unless you have already changed your password at home or on a student PC)</p>
                                    </div>
                                </div>
                            </div>
                            <p>Your default password is tafewa (all lower-case) and your date of birth in DDMMYYYY format, e.g., tafewa14092006 </p>
                            <ul>
                                <li>Sign in using your Student ID Number followed by @tafe.wa.edu.au eg. 20001245@tafe.wa.edu.au </li>
                                <li>Click on Next three times.</li>
                                <li>You will now be required to set up Microsoft Authenticator.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Microsoft Authenticator Setup -->
                <section>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateRight">Microsoft Authenticator Setup</h2>
                        </div>
                        <div class="card-body">
                            <p>When you setup Microsoft 365 for the first time you are required to download the Microsoft Authenticator Application to a working smartphone.</p>
                            <ul>
                                <li>The App is available for both <a href="https://apps.apple.com/au/app/microsoft-authenticator/id983156458" target="_blank">Apple</a> and <a href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en_AU" target="_blank">Android</a></li>
                                <li>It can be set-up using a smartphone only, or with a smartphone and computer.</li>
                                <li>Use the Downloadable Instruction Sheets, linked at the bottom of this FAQ to guide you through the setup process.</li>
                            </ul>
                            
                            <p>Visit our <a href="<?php echo site_url().'/password-help'; ?>">Password Help Page</a> for everything you need to know about TAFE passwords</p>
                            
                            <p>If you need help with this process, please visit a campus library. If possible, download the Microsoft Authenticator prior to your visit.</p>
                            
                            <p>If you do not have a smartphone click this link for other ways to contact us, <a href="https://guides.dtwd.wa.gov.au/nmtafe-library/ContactUs" target="_blank">Contact a campus library</a></p>
                            
                            <p>Click this link for instructions in <a href="https://northmetrotafe.libanswers.com/faq/275738" target="_blank">Languages Other Than English</a></p>
                            
                            <p><span class="bold-text">Note:</span> To access your TAFE email on your phone, Microsoft requires the installation of the Outlook App on your device.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row p-2">
            <!-- Documents -->
            <section>
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateLeft">Support Documents</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><a href="<?php echo get_template_directory_uri(); ?>/documents/set_up_microsoft_authenticator_with_phone_and_pc.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Set up Microsoft Authenticator with a phone and PC</a></li>
                            <li><a href="<?php echo get_template_directory_uri(); ?>/documents/set_up_microsoft_authenticator_with_phone_only.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Set up Microsoft Authenticator with only a phone</a></li>
                            <li><a href="https://support.microsoft.com/en-us/microsoft-365" target="_blank">Microsoft Support</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="row p-2">
            <!-- Video Tutorials -->
            <section class="video-tutorials">
                <div class="card">
                    <div class="card-header">
                        <h2 class="animateLeft">Video Tutorials</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <h3 class="fs-4">Set up Microsoft Authenticator</h3>
                                <iframe width="450" height="290" src="https://www.youtube.com/embed/CGQSX6Y0gNc" title="Set up Microsoft Authenticator for first time TAFE users" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-12 col-xl-6">
                                <h3 class="fs-4">Set up Microsoft Authenticator with a phone only</h3>
                                <iframe width="450" height="290" src="https://www.youtube.com/embed/ZsgfGog-b-I" title="Set up Microsoft Authenticator with a phone only (TAFE students)." allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>


<?php get_footer(); ?>
