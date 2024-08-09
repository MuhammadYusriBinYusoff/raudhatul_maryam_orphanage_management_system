<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SpiraOMS - Help orphanage</title>
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
    <link href="<?= BASEURL; ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= BASEURL; ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= BASEURL; ?>/css/style12.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/donate.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/style13.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/team.css" rel="stylesheet">

</head>

<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 display-4 text-primary text-uppercase">SpiraCare</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row gx-0 bg-secondary d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                        <i class="fa fa-envelope text-primary me-2"></i>
                        <h6 class="mb-0">spiracare@gmail.com</h6>
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
                        <a class="btn btn-light btn-square rounded-circle me-2" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="btn btn-light btn-square rounded-circle me-2" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="btn btn-light btn-square rounded-circle me-2" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-light btn-square rounded-circle" href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
    <a href="index.php" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary text-uppercase">SpiraCare</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="<?= BASEURL; ?>/home" class="nav-item nav-link">Home</a>
            <a href="<?= BASEURL; ?>/home/about" class="nav-item nav-link">About</a>
            <a href="<?= BASEURL; ?>/home/team" class="nav-item nav-link">Team</a>
            <?php if (!isset($_SESSION["CATEGORY"])) : ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?= BASEURL; ?>/donation" class="dropdown-item">
                            <i class="fa fa-eye text-primary me-2"></i>View Request
                        </a>
                    </div>
                </div>
            <?php elseif ($_SESSION["CATEGORY"] == "admin") : ?>
                <a href="<?= BASEURL; ?>/authentication/verificationStatus" class="nav-item nav-link">Verification</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?= BASEURL; ?>/donation/requestDonation" class="dropdown-item">Request Donation</a>
                        <a href="<?= BASEURL; ?>/donation" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                        <a href="<?= BASEURL; ?>/donation/manageDonation" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>Manipulate Item Request</a>
                        <a href="<?= BASEURL; ?>/history/viewHistory" class="dropdown-item"><i class="fa fa-history text-primary me-2"></i>History</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Storage</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?= BASEURL; ?>/inventory" class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i>add item</a>
                        <a href="<?= BASEURL; ?>/inventory/editInventoryPage" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>edit Item</a>
                    </div>
                </div>
            <?php elseif ($_SESSION["CATEGORY"] == "orphanage") : ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?= BASEURL; ?>/donation/requestDonation" class="dropdown-item">Request Donation</a>
                        <a href="<?= BASEURL; ?>/donation" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>My Request</a>
                        <a href="<?= BASEURL; ?>/donation/manageDonation.php" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>Manipulate Item Request</a>
                        <a href="<?= BASEURL; ?>/history/viewHistory" class="dropdown-item"><i class="fa fa-history text-primary me-2"></i>History</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Storage</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?= BASEURL; ?>/inventory" class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i>add item</a>
                        <a href="<?= BASEURL; ?>/inventory/editInventoryPage" class="dropdown-item"><i class="fa fa-pen-square text-primary me-2"></i>edit Item</a>
                    </div>
                </div>
            <?php else : ?>
                <a href="<?= BASEURL; ?>/payment/payment" class="nav-item nav-link">Payment</a>
                <a href="<?= BASEURL; ?>/home/gallery" class="nav-item nav-link">Gallery</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?= BASEURL; ?>/donation" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <a href="<?= BASEURL; ?>/view/contact.php" class="nav-item nav-link">Contact</a>
    </div>
    <?php if (isset($_SESSION["Login"]) && $_SESSION["Login"] == "YES") : ?>
        <a href="<?= BASEURL; ?>/authentication/logout" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Log out</a>
    <?php else : ?>
        <a href="<?= BASEURL; ?>/authentication" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Register</a>
    <?php endif; ?>
</nav>