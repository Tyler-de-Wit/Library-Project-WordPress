

<!-- Footer -->
<footer class="text-center text-lg-start text-muted pt-1" id="footer">

    <section>
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <!-- Business Information -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 pe-xl-2 pe-xs-0 text-dark">
                    <h2 class="text-uppercase fw-bold mb-4 fs-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" alt="book logo" width="25" height="25">
                        NMT Library
                    </h2>
                    <p>Use this site to learn how to setup Microsoft 365, connect to the WIFI on campus, access Blackboard, find your timetable, use the library printers, view the most frequently asked questions and more.</p>
                </div>
        
                <!-- Grid column -->
                <!-- Navigation -->
                <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4 ps-xl-5 ps-xs-0 text-dark">
                    <h2 class="text-uppercase fw-bold mb-4 fs-6">
                        Navigation
                    </h2>
                    <p><a href="<?php echo home_url(); ?>" class="text-reset">Home</a></p>
                    <p><a href="<?php echo site_url().'/faq'; ?>" class="text-reset">FAQ</a></p>
                    <p><a href="<?php echo site_url().'/contact'; ?>" class="text-reset">Contact</a></p>
                    <p><a href="<?php echo site_url().'/sitemap'; ?>" class="text-reset">Sitemap</a></p>
                </div>
        
                <!-- Grid column -->
                <!-- Useful Pages -->
                <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4 ps-xl-3 ps-xs-0 text-dark">
                    <h2 class="text-uppercase fw-bold mb-4 fs-6">
                        Useful Pages
                    </h2>
                    <p><a href="<?php echo site_url().'/microsoft-setup'; ?>" class="text-reset">Microsoft Setup</a></p>
                    <p><a href="<?php echo site_url().'/login-to-wifi'; ?>" class="text-reset">Login To WIFI</a></p>
                    <p><a href="<?php echo site_url().'/locating-timetable'; ?>" class="text-reset">Locating Timetable</a></p>
                    <p><a href="<?php echo site_url().'/library-printers'; ?>" class="text-reset">Library Printers</a></p>
                    <p><a href="<?php echo site_url().'/password-help'; ?>" class="text-reset">TAFE Passwords</a></p>
                </div>
        
                <!-- Grid column -->
                <!-- Contacts -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-dark">
                    <h2 class="text-uppercase fw-bold mb-4 fs-6">Get In Touch</h2>
                    <p><i class="bi bi-building me-3"></i>25 Aberdeen Street, Perth WA 6000</p>
                    <p><i class="bi bi-calendar me-3"></i>Monday - Friday 8am - 4pm</p>
                    <p><i class="bi bi-telephone me-3"></i>1300 300 822</p>
                </div>
            </div>
        </div>
    </section>
  
    <!-- Copyright -->
    <div class="text-center p-4 text-dark" id="copyright-statement">
        <p class="m-0">&copy;2025 NMT Library, All Rights Reserved</p>
    </div>
</footer>


<?php wp_footer(); ?>


</body>
</html>
