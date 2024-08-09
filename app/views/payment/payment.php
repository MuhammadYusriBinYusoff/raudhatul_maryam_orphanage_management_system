<!-- <!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>
<body>

    <h1>Stripe Example</h1>
    <form method="post" action="<?= BASEURL; ?>/payment/checkout">
        <p>T-shirt</p>
        <p><strong>MYR$20.00</strong></p>
        <button>Pay</button>
    </form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/js/bootstrap.js">
	<link href="<?= BASEURL; ?>/css/stylePayment.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <title>Donate</title>
</head>
<body>

<div class="container">

    <form action="<?= BASEURL; ?>/payment/checkout" method="post">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <h3 class="title text-center">Donate Now</h3>

                <div class="inputBox">
                    <span>Enter Donation Amount:</span>
                    <input type="number" name="amount" placeholder="Enter amount in MYR" required="">
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Donate Now">
                </div>

            </div>
    
        </div>

    </form>

</div>    
    
</body>
</html>
