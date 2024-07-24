
<?php
 session_start();

 $kk = 2;

 if($kk == 1){
    $_SESSION["LA"] = "YES";
 }
 
 
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
    <link href="css/style12.css" rel="stylesheet">
    <link href="css/donate.css" rel="stylesheet">

</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
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
                            <h6 class="mb-0">019-752 0966</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="https://www.facebook.com/RaudhatulMaryam/">
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
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
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
                            <a href="picture.php" class="nav-item nav-link">Gallery</a>
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
                        
                        <?php
                        if(isset($_SESSION["Login"])){

                        if($_SESSION["Login"]== "YES"){
                            
                        ?>
                        <a href="registration/checklogout.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Log out</a>

                        <?php
                        }else{

                        ?>
                        <a href="registration/registration2.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Register</a>
                        <?php
                        }
                    }else{
                        ?>

                        <a href="registration/registration2.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Register</a>

                        <?php
                    }
                        ?>
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/orphanage1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Your trusted Orphanage management System </h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Donate as you wish</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/donation.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Your trusted Orphanage management System </h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Donate as you wish</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/rumah.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase">About Us</h5>
                    <h1 class="display-3 text-uppercase mb-0">Welcome to Eden</h1>
                </div>
                <h4 class="text-body mb-4">We are here to make it easy</h4>
                <p class="mb-4">Donate according to wish</p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 active" data-bs-toggle="pill" href="#pills-1">About Us</a>
                        </li>
                        <li class="nav-item w-50">
                                <a class="nav-link text-uppercase text-center w-100" data-bs-toggle="pill" href="#pills-2">Why Choose Us</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0">Let's lend a hand to those that are struggling.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0">donate according to idea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class=""></i>
                    <h3 class="text-uppercase my-4">Cloths</h3>
                    <p>Taking advantage of any and all assistance, including wearable clothing</p>
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
    <!-- Programe Start -->

    <!-- Donate as you wish -->
    <div class ="words">“Whoever takes care of three orphans, then it is like waking up at night and fasting during the day, and like someone who goes out every morning and evening draws his sword to wage jihad in the way of Allah. And later in heaven with me like a brother, like these two fingers, namely the index finger and middle finger."<br>
         Muhammad ﷺ</div>
    <!-- Donate as you wish -->

    

    <!-- Facts Start -->
    <div class="container-fluid bg-dark facts p-5 my-5">
        <div class="row gx-5 gy-4 py-5">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-star fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Experience</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">6172</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Our help</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">23124</h1>
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
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">4234</h1>
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
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">32712</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    
    

    <!-- Testimonial Start -->
    <div class="container-fluid p-0 my-5">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="client.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 bg-dark p-5">
                <div class="mb-5">
                    <h5 class="text-primary text-uppercase">Help Humanity</h5>
                    <h1 class="display-3 text-uppercase text-light mb-0">What people Says?</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>The owner has the satisfaction of helping children in desperate need of love and caring. If they are in it to make money then they are the worst of caregivers</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="client1.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Cikgu Nasir</h5>
                                <span class="text-uppercase text-secondary">Owner</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>The owner has the satisfaction of helping children in desperate need of love and caring. If they are in it to make money then they are the worst of caregivers</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="client1.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Client Name</h5>
                                <span class="text-uppercase text-secondary">Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    

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
                            <p class="mb-0">019-752-0966</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.facebook.com/RaudhatulMaryam/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
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
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Eden</a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by team eden <a class="text-light fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
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



