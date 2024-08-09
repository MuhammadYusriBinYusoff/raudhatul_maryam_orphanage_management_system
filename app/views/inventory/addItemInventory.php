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
    
</head>

<body>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Register Item Inventory</h1>
                <a href="<?= BASEURL; ?>/home" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="<?= BASEURL; ?>/inventory" class="btn btn-light py-md-3 px-md-5">Add Item</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">" Happiness depends upon ourselves " ~ Aristotle</h5>
            <h1> Item Inventory Form</h1>
        </div>
 
                 
        <div class = 'request-header'>
            <div class = 'request-info'>      
                <form method ="post" action ="<?= BASEURL; ?>/inventory/addInventory"  name="reqForm" onsubmit="return(validate())">
                    <label><h4>Item names:</h4> </label>
                    <input type ="text" name ="itemName" class="form-control bg-light border-0 px-4" placeholder="Minyak Masak" ><br/><br/>
                    <label><h4>Item Quantity:</h4> </label>
                    <input type="number" name="quantity" class="form-control bg-light border-0 px-4" name="quantity" min="0" max="999"><br/><br/>
                    <label><h4>Unit:</h4> </label>
                    <select name ="itemUnit" class='btn btn-light py-md-1 px-md-6'>
                        <option value ="none" >none</option>
                        <option value ="packet" >packet</option>
                        <option value ="box" >box</option>
                        <option value ="kg">kg</option>
                        <option value ="gallon" >gallon</option>
                        <option value ="bottle" >bottle</option>

                    </select></br></br>
                    <label><h4>Item Category:</h4> </label>
                    <select name ="itemCategory" class='btn btn-light py-md-1 px-md-6'>
                        <option value ="food" >Food</option>
                        <option value ="clothes" >Clothes</option>
                        <option value ="Stationeries">Stationery</option>
                    </select></br></br>
                     </br></br>
    
                        <input class='btn btn-light py-md-3 px-md-5' value="submit" type="submit">
    
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