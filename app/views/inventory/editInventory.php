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

    <style>
        .view-info {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        table {
            margin: 0 auto;
        }
    </style>

</head>

<body>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Manipulate Storage</h1>
                <a href="<?= BASEURL; ?>/home" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="<?= BASEURL; ?>/inventory/editInventoryPage" class="btn btn-light py-md-3 px-md-5"><i class="fa fa-pen-square text-primary me-2"></i>Manipulate Storage</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">" Quality is everyone's reponsibility" ~ W. Edwards Deming</h5>
            <h1>Item Inventory</h1>
        </div>

        <!-- Start table tag -->
        <div class='request-header'>
            <div class='view-info'>
                <form method="post" action="<?= BASEURL; ?>/inventory/updateInventory" name="viewForm">
                    <table width="600" border="1" cellspacing="0" cellpadding="3">

                        <!-- Print table heading -->
                        <tr>
                            <td align="center"><strong>Id</strong></td>
                            <td align="center"><strong>Item Name</strong></td>
                            <td align="center"><strong>Quantity</strong></td>
                            <td align="center"><strong>Unit</strong></td>
                            <td align="center"><strong>Category</strong></td>
                            <td align="center"><strong>Delete</strong></td>
                        </tr>

                        <?php
                        // output data of each row
                        $_SESSION["VIP1"] = "student";
                        foreach ($data as $rows): //nak fetch or retrieve data intil complete from the row kite je...not other people row
                        ?>

                            <tr>
                                <td align="center"><input name="inventoryId" type="number" id="itemId" value="<?php echo $rows['inventoryID']; ?>" required></td>
                                <td align="center"><input name="itemName" type="text" id="itemName" size="30" value="<?php echo $rows['itemNames']; ?>" required></td>
                                <td align="center"><input name="itemQuantity" type="number" id="itemQuantity" size="15" value="<?php echo $rows['quantity']; ?>" required></td>
                                <td align="center"><input name="itemUnit" type="text" id="unit" size="30" value="<?php echo $rows['unit']; ?>" readonly></td>
                                <td align="center"><input name="itemCategory" type="text" id="category" size="15" value="<?php echo $rows['category']; ?>" required></td>
                                <td align="center"> <a href="<?= BASEURL; ?>/inventory/deleteInventory/<?= $rows['inventoryID']; ?>"><i class="fa fa-trash text-primary me-2"></i></a> </td>
                            </tr>

                        <?php endforeach ?>
                    </table>
                    <br><br>
                    <input class='done-button' value="Save" type="submit">
                </form>
            </div>
        </div>


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
        <script src="<?= BASE_URL; ?>/js/main.js"></script>
</body>

</html>