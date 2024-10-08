

<body>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Contact</h1>
                <a href="<?php echo BASEURL; ?>/home" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Contact</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Contact Us</h5>
            <h1 class="display-3 text-uppercase mb-0">Get In Touch</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Visit Us</h5>
                    <p class="text-secondary mb-0">Raudhatul Maryam, 11, Jalan Pulai 54</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Email Us</h5>
                    <p class="text-secondary mb-0">spiracare@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Call Us</h5>
                    <p class="text-secondary mb-0">019-752 0966</p>
                </div>
            </div>
        </div>
        <h2>Any Issues? questions? Just need to say hello.<br> We would love to hear from </h2>
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="bg-dark p-5">
                    <form id="feedback" action="" method="post">
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;" name="name">
                            </div>
                            <div class="col-6">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;" name="email" required>
                            </div>
                            <div class="col-12">
                                <input type="subject" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;" name="subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0 px-4 py-3" rows="4"  placeholder="Message" name="message"></textarea>
                            </div>
                            
                            <div class="col-12">
                                <input id="Submit" class="btn btn-primary w-100 py-3" type="submit" value="Submit" name="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3648154920866!2d103.61183291467047!3d1.5466159988721204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da741863d3625f%3A0x9aec809987f593eb!2sRaudhatul%20Maryam!5e0!3m2!1sid!2smy!4v1672727023901!5m2!1sid!2smy" 
                width="700" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


<?php
// if (isset($_POST['Submit'])) {
//         require ("config.php"); 
//         $sql = "INSERT INTO feedback (name, email, subject, message) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
//         $insert = mysqli_query($conn, $sql);
//         mysqli_close($conn);
// }
// ?>
// <?php
//   $posted = false;
//   if( $_POST ) {
//     $posted = true;

//     // Database stuff here...
//     // $result = mysql_query( ... )
//     $result = $_POST['Submit'] == "danny"; // Dummy result
//   }
// ?>

// <?php
//     if( $posted ) {
//       if( $result ) 
//         echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
//       else
//         echo "<script type='text/javascript'>alert(' Your message submitted successfully!')</script>";
//     }
//   ?>
    <!-- Contact End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/lib/easing/easing.min.js"></script>
    <script src="<?= BASEURL; ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= BASEURL; ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?= BASEURL; ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= BASEURL; ?>/js/main.js"></script>
</body>

</html>