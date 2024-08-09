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

    <!-- Template Sendiri -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/reqItems.css">
    
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
    
        <!-- Start table tag -->
        <div class = 'request-header'>
            <div class = 'view-info'> 
            <form method ="post" action ="<?= BASEURL; ?>/donation/updateRequest" name="viewForm">
                <table width="600" border="1" cellspacing="0" cellpadding="3">
             
                <!-- Print table heading -->
                <tr>
                <td align="center"><strong>Id</strong></td>
                <td ><input name="itemId" type="number" id="itemId" value="<?= $data['itemId']; ?>" required></td>
                </tr>

                <tr>
                <td align="center"><strong>Item Name</strong></td>
                <td ><input name="itemName" type="text" id="itemName" size="30" value="<?= $data['itemName']; ?>" required></td>
                </tr>

                <tr>
                <td align="center"><strong>Quantity</strong></td>
                <td><input name="itemQuantity" type="number" id="itemQuantity" size="15" value="<?= $data['itemQuantity']; ?>" required></td>
                </tr>

                <tr>
                <td align="center"><strong>Category</strong></td>
                <td><input name="itemCategory" type="text" id="category"  size="15" value="<?= $data['category']; ?>" required></td>
                </tr>

                <tr>
                <td align="center"><strong>Dates</strong></td>
                <td><input name="requestDate" type="date" id="dates"  size="15" value="<?= $data['dates']; ?>" required></td>
                </tr>

                <tr>
                <td align="center">&nbsp;</td>
                <td align="center"><input type="submit" name="Submit" value="Update"></td>
                </tr>
    
             </table>
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
    <script src="<?= BASEURL; ?>/js/main.js"></script>
</body>

</html>