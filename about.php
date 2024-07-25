<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eden-Orphanage management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style13.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Eden</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">eden@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+012 345 6789</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Eden</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="team.php" class="nav-item nav-link">Team</a>

                            <?php
                             //if(!isset($_COOKIE["success"])){

                               // if(!isset($_COOKIE["success"])){
                                if(!isset($_SESSION["CATEGORY"])){
                            ?>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="viewDonation.php" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                                </div>
                            </div>
                            

                            <?php
                             } else{
                            ?>

                            <?php
                            
                            
                        

                            if($_SESSION["CATEGORY"]=="admin"){

                            ?>
                            <a href="registration/adminVerification.php" class="nav-item nav-link">Verification</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                <a href="requestDonation.html" class="dropdown-item">Request Donation</a>
                                    <a href="viewDonation.php" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                                    <a href="manageRequest.php" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>Manipulate Item Request</a>
                                    <a href="viewHistory.php" class="dropdown-item"><i class="fa fa-history text-primary me-2"></i>History</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Storage</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="addItemStorage.php" class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i>add item</a>
                                    <a href="editStorage.php" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>edit Item</a>
                                </div>
                            </div>

                            <?php
                            }else if($_SESSION["CATEGORY"]=="orphanage"){
        

                            ?>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    
                                    <a href="requestDonation.html" class="dropdown-item">Request Donation</a>
                                    <a href="viewDonation.php" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>My Request</a>
                                    <a href="manageRequest.php" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>Manipulate Item Request</a>
                                    <a href="viewHistory.php" class="dropdown-item"><i class="fa fa-history text-primary me-2"></i>History</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Storage</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="addItemStorage.php" class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i>add item</a>
                                    <a href="editStorage.php" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>edit Item</a>
                                </div>
                            </div>

                            <?php
                            }else if(($_SESSION["CATEGORY"]=="donor") || ($_SESSION["CATEGORY"]==NULL) )  {

                            ?>
                            <a href="Payment/Payment.html" class="nav-item nav-link">Payment</a>

                            <a href="picture.php" class="nav-item nav-link">Gallery</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="viewDonation.php" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                                </div>
                            </div>

                            <?php
                            }

                        } 
                            //}
                            ?>


                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Join Us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">About Us</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="about.php" class="btn btn-light py-md-3 px-md-5">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="assets/cikgu.jpeg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase">Orphanage Management System</h5>
                    <h1 class="display-3 text-uppercase mb-0">Chairman Message</h1>
                </div>
                <h4 class="text-body mb-4">Cikgu Nasir</h4>
                <p class="">It is for compassion, mercy and compassion 
                    that society and life are built on sincerity and purity of soul to help fellow human beings, that is, human practice is of value in the sight of Allah SWT. 
                    That is the intent and will of the Word of Allah SWT: "And you should help to make goodness and piety and do not help you to do sin (immorality) and carelessness (enmity).</p> 
    </div>
    <!-- About End -->
    <div class=intro><h3 class=speech>Introduction</h3>The majority of Orphanages in Johor is lacking a proper orphanage management system. These methods make it challenging to manage orphan data efficiently and to inform decisions at different levels. This study is in two folds. We analyzed and examined the pros and cons of having a web-based management system information system for orphanage management, and also designed and implemented a web-based system for the management of orphanages. The “ORPHANAGE MANAGEMENT SYSTEM” provides easier and smoother management of an orphanage system. 
    Orphanage management system assists to keep a record of all processes done in an orphanage. Here this software keeps the details of the inmates, donors, and staff. There are two users in the project,  donors and orphanages. 
    The main users in the system are the donors and orphanages. The registration process of the orphanage and donors  is done by the administrator. Admin maintains details of donation/sponsorship, expenses, and maid details. Admin allots work area for maids and daily expenses done for orphans are computerized Reports are generated to view orphans in the home and, sponsor/donation details and expenses details are viewed on a daily and monthly bases.</div>

    <div class=intro1><h3 class=speech>Our Project</h3>This website project was created to complete the task of application development SECJ3104.Here we learn how to build a website that can be used properly, according to the title above. We build a website for orphanages that functions as a platform.to help orphans make it easier.<br><br>
    <h3 class=speech>Vision</h3>In light of the teachings of our Prophet Muhammad, we aim for a society in which no one, regardless of background, is deprived of access to basic necessities like clean water, proper nutrition, and safe shelter.<br> </div>
    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class=""></i>
                    <h3 class="text-uppercase my-4">Cloths</h3>
                    <p>Taking advantage of any and all assistance, including wearable clothing </p>
                    <a class="text-uppercase" href="">Donate here <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class=""></i>
                    <h3 class="text-uppercase my-4">Food</h3>
                    <p>Help in the form of food and other necessities will be provided by the relief organisation.</p>
                    <a class="text-uppercase" href="">Donate here <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class=""></i>
                    <h3 class="text-uppercase my-4">Financial</h3>
                    <p>can assist us with financial matters, and help each others</p>
                    <a class="text-uppercase" href="">Donate here <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">"Help humanity"</h1>
                
                <div class="box1">
                    <a class="button1" href="#popup1">Quick Donate</a>
                </div>

                <div id="popup1" class="overlay">
                    <div class="popup">
                        <h2>Donate Through..</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content1">
                            NO.11, Jalan Pulai 54,<br>
                    Taman Pulai Utama,<br>
                    81300 Skudai Johor Bahru<br><br>
                    Maybank account : 551306510355 <br><br>
                    Thank you For Donate!!
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
    <!-- Programe End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-dark facts p-5" style="margin-bottom: 90px;">
        <div class="row gx-5 gy-4 py-5">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-star fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Experience</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Our Trainers</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-check fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Complete Project</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-mug-hot fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Happy Clients</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Raudhatul Maryam, Taman Universiti, 81300 Johor Bahru, Johor</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">eden@gmail.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">019-752 0966</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Website</h6>
                    <p class="text-light"></p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="https://htmlcodex.com">EDEN</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>