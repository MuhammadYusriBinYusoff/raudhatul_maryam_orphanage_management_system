<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function validate() {
            if (document.reqForm.itemName.value == "") {
                alert("Please provide ITEM NAME !");
                document.reqForm.itemName.focus();
                return false;
            }
            if (document.reqForm.quantity.value == "") {
                alert("Please provide ITEM QUANTITY !");
                document.reqForm.itemName.focus();
                return false;
            }
            if (document.reqForm.requestDate.value == "") {
                alert("Please provide DATE !");
                document.reqForm.itemName.focus();
                return false;
            }
            return (true);

        }
    </script>

</head>

<body>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Manipulate Item Request</h1>
                <a href="<?= BASEURL; ?>/home" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="<?= BASEURL; ?>/donation/manageDonation" class="btn btn-light py-md-3 px-md-5">Manipulate Item</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <h3>Record deleted successfully</h3>


    <!-- Team Start -->


    <?php


    // $querys = mysqli_query($conn, "select * from history");
    // $numbers = 1;
    // while ($row = mysqli_fetch_array($querys)) {
    //     $id = $row['historyID']; //PLEASE CHANGE ACCORDING TO YOUR DATABASE AUTO-INCREAMENT ID
    //     $sql = "UPDATE history SET historyID=$numbers WHERE historyID=$id";
    //     if ($conn->query($sql) == TRUE) {
    //         echo "Record RESET succesfully<br>";
    //     }
    //     $numbers++;
    // }


    // $query = mysqli_query($conn, "select * from requestitem");
    // $number = 1;
    // while ($row = mysqli_fetch_array($query)) {
    //     $id = $row['itemId']; //PLEASE CHANGE ACCORDING TO YOUR DATABASE AUTO-INCREAMENT ID
    //     $sql = "UPDATE requestitem SET itemId=$number WHERE itemId=$id";
    //     if ($conn->query($sql) == TRUE) {
    //         echo "Record RESET succesfully<br>";
    //     }
    //     $number++;
    // }

    // $sql = "ALTER TABLE requestitem AUTO_INCREMENT =1"; //CHANGE TABLE NAME
    // if ($conn->query($sql) == TRUE) {
    //     echo "Record ALTER succesfully";
    // } else {
    //     echo "Error ALTER record: " . $conn->error;
    // }

    // mysqli_close($conn);

    echo "<p><a href='index.php'>Click here to go to main page</a></p>";

    ?>

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