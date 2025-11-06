<?php get_header(); ?>


<!-- Main -->
<main class="password-help-main container mt-3" id="main">
    <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
    <button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <h1 class="mb-5 text-center">TAFE Password Help</h1>

    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-12 col-lg-6">
                <!-- Default Password -->
                <section class="container-fluid mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateLeft">Default Password</h2>
                        </div>
                        <div class="card-body">
                            <p>Your default password is <span class="bold-text">tafewa</span> (all lower-case) and your date of birth in DDMMYYYY format, e.g., <span class="bold-text">tafewa14092006</span></p>
                            <p>If the default password does not work, please contact one of the <a href="https://guides.dtwd.wa.gov.au/nmtafe-library/ContactUs" target="_blank">Campus Libraries</a></p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-lg-6">
                <!-- New Password Requirements -->
                <section class="container-fluid mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateRight">New Password Requirements</h2>
                        </div>
                        <div class="card-body">
                            <p>Your new password can use any combination of letters or numbers but must be a minimum of 14 characters.</p>
                            <p>(It expires every 6 months)</p>
                            <p><span class="bold-text">Tip:</span> Use words or phrases you are going to remember </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12 col-lg-6">
                <!-- Changing Your Password -->
                <section class="container-fluid mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateLeft">Changing Your Password</h2>
                        </div>
                        <div class="card-body">
                            <p>You can change your password yourself either from within Microsoft 365 or via the Microsoft Authenticator app.</p>
        
                            <p>With Microsoft 365</p>
                            <ul>
                                <li>Make sure you are on the Microsoft 365 landing page,</li>
                                <li><span class="bold-text">Select</span> the settings cog in the top-right hand corner,</li>
                                <li><span class="bold-text">Click</span> on change password.</li>
                            </ul>
        
                            <p>With Microsoft Authenticator App</p>
                            <ul>
                                <li><span class="bold-text">Open</span> the Microsoft Authenticator App,</li>
                                <li><span class="bold-text">Select</span> your TAFE account.</li>
                                <li><span class="bold-text">Press</span> change password.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Forgotten / Expired Password -->
                <section class="container-fluid mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateRight">Forgotten / Expired Password</h2>
                        </div>
                        <div class="card-body">
                            <p>If you forget your password for Microsoft 365 or it has expired, you can reset it by following the steps below.</p>
                            <ul>
                                <li>From the Microsoft 365 sign-in page, <span class="bold-text">Click</span> "Can't access your account",</li>
                                <li><span class="bold-text">Select</span>, "Work or school account",</li>
                                <li><span class="bold-text">Enter</span> your student email where it says Email or username. <span class="bold-text">Enter</span> the characters in the picture, then <span class="bold-text">Click</span> next,</li>
                                <li><span class="bold-text">Follow</span> the Microsoft verification procedure, using either your phone number, email and/or authenticator app.</li>
                            </ul>
                            
                            <p><span class="bold-text">See</span> attachments below for more detailed instructions.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12 col-lg-6">
                <!-- Further Assistance -->
                <section class="container-fluid mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateLeft">Further Assistance</h2>
                        </div>
                        <div class="card-body">
                            <p>If your default password does not work or you require any further assistance with the above;</p>
                            <ul>
                                <li>Please contact the college on <a href="tel:1300300822">1300 300 822</a></li>
                                <li>Or call or drop in to one of the <a href="https://guides.dtwd.wa.gov.au/nmtafe-library/ContactUs" target="_blank">Campus Libraries</a></li>
                            </ul>
                            <p>(Client Services and the Library are unable to change passwords using the chat function or over email.)</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Documents -->
                <section class="container-fluid mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="animateRight">Support Documents</h2>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/documents/change_password_in_microsoft_365.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Change Your Password In Microsoft 365</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/documents/reset_password_using_email_and_phone.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Reset Forgotten Password Using Email And Phone</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/documents/reset_password_using_microsoft_authenticator.pdf" target="_blank"><i class="bi bi-file-earmark-pdf"></i>Reset Forgotten Password Using Microsoft Authenticator</a></li>
                                <li><a href="https://login.microsoftonline.com/" target="_blank">Log in To Microsoft 365</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>
