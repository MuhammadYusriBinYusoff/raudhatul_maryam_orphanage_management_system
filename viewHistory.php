<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script>
            
        function validate()
        {
            if(document.reqForm.itemName.value == "")
            {
                alert("Please provide ITEM NAME !");
                document.reqForm.itemName.focus();
                return false;
            }
            if(document.reqForm.quantity.value == ""){
                alert("Please provide ITEM QUANTITY !");
                document.reqForm.itemName.focus();
                return false;
            }
            if(document.reqForm.requestDate.value == ""){
                alert("Please provide DATE !");
                document.reqForm.itemName.focus();
                return false;
            }
            return(true);

        }
    </script>


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

    <!-- Template Sendiri -->
    <link rel="stylesheet" href="reqItems.css">

    
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
                                    if($_SESSION["CATEGORY"]=="admin"){

                                ?>
                                <a href="registration/adminVerification.php" class="nav-item nav-link">Verification</a>
                                <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                <div class="dropdown-menu rounded-0 m-0">
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
                                    }else{

                                ?>
                                <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="viewDonation.php" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                                    
                                </div>
                                </div>
                                <?php
                                    }
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
                <h1 class="display-2 text-uppercase text-white mb-md-4">History Session</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="viewHistory.php" class="btn btn-light py-md-3 px-md-5"><i class="fa fa-history text-primary me-2"></i>History</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">" Yesterday is history, tomorrow is a mystery, today is a gift of God, which is why we call it the present " ~ Bill Keane</h5> <br>
            <h1 >Raudhatul Maryam's History Request</h1>
        </div>
 
    
        <?php
        require ("config.php"); 
        $sql = "SELECT * FROM history";
             $result = mysqli_query($conn, $sql); 
        
             if (mysqli_num_rows($result) > 0) { 	
        ?>
    
        <!-- Start table tag -->
        <div class = 'request-header'>
            <div class = 'view-info'> 
            <form method ="post" action ="index.php" name="viewForm">
                <table width="600" border="1" cellspacing="0" cellpadding="3">
             
                <!-- Print table heading -->
                <tr>
                <td align="center"><strong>Id</strong></td>
                <td align="center"><strong>Item Name</strong></td>
                <td align="center"><strong>Quantity</strong></td>
                <td align="center"><strong>Unit</strong></td>
                <td align="center"><strong>Category</strong></td>
                <td align="center"><strong>Dates</strong></td>
                </tr>
    
                <?php
                    // output data of each row
                    $_SESSION["VIP1"] = "student";
                    while($rows = mysqli_fetch_assoc($result)) { //nak fetch or retrieve data intil complete from the row kite je...not other people row
                ?>
    
                <tr>
                    <td align="center"><?php echo $rows['historyID']; ?></td>
                    <td align="center"><?php echo $rows['itemName']; ?></td>
                    <td align="center"><?php echo $rows['itemQuantity']; ?></td>
                    <td align="center"><?php echo $rows['unit']; ?></td>
                    <td align="center"><?php echo $rows['category']; ?></td>
                    <td align="center"><?php echo $rows['dates']; ?></td>
                </tr>
    
             <?php }?>
             </table>
    
             <input class='done-button' value="Done" type="submit">
            </form>
         <?php }?>
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
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
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
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                    <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
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
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
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