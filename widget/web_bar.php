<?php
session_start();

$kk = 2;

if ($kk == 1) {
    $_SESSION["LA"] = "YES";
}

define('BASE_URL', '/Activity-PHP/raudhatul_maryam_orphanage_management_system/');
define('CONFIG_URL', '/Activity-PHP/raudhatul_maryam_orphanage_management_system/config.php/');

?>

<?php
function webBarMenu()
{
?>
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
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Eden</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="<?php echo BASE_URL; ?>index.php" class="nav-item nav-link">Home</a>
                            <a href="<?php echo BASE_URL; ?>view/about.php" class="nav-item nav-link">About</a>
                            <a href="<?php echo BASE_URL; ?>view/team.php" class="nav-item nav-link">Team</a>
                            <?php

                            if (!isset($_SESSION["CATEGORY"])) {
                            ?>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="view/donation/viewDonation.php" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                                    </div>
                                </div>
                                <?php
                            } else {
                                if ($_SESSION["CATEGORY"] == "admin") {
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
                                } else if ($_SESSION["CATEGORY"] == "orphanage") {
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
                                } else if ($_SESSION["CATEGORY"] == "donor" || $_SESSION["CATEGORY"] == NULL) {
                                ?>
                                    <a href="Payment/Payment.html" class="nav-item nav-link">Payment</a>
                                    <a href="<?php echo BASE_URL; ?>view/gallery/picture.php" class="nav-item nav-link">Gallery</a>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donations</a>
                                        <div class="dropdown-menu rounded-0 m-0">
                                            <a href="<?php echo BASE_URL; ?>view/donation/viewDonation.php" class="dropdown-item"><i class="fa fa-eye text-primary me-2"></i>View Request</a>
                                        </div>
                                    </div>
                            <?php

                                }
                            }
                            ?>
                        </div>
                        <a href="<?php echo BASE_URL; ?>view/contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php
                    if (isset($_SESSION["Login"])) {

                        if ($_SESSION["Login"] == "YES") {

                    ?>
                            <a href="registration/checklogout.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Log out</a>

                        <?php
                        } else {

                        ?>
                            <a href="registration/registration2.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Register</a>
                        <?php
                        }
                    } else {
                        ?>

                        <a href="registration/registration2.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Register</a>

                    <?php
                    }
                    ?>
            </div>
            </nav>
        </div>
    </div>
<?php
}
