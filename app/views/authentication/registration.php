
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/js/bootstrap.js">
    <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<title>Registration Form</title>

<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

</head>
<body>

	<div class="main-w3layouts wrapper">
		<h1>Registration Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?= BASEURL; ?>/authentication/addUser"  method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="7-10">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="confirmpassword" placeholder="Confirm Password" required="">
					<div class="category" style="color:white">
						<h3>Select Category</h3>
						<input type="radio" name="category" value="orphanage">Orphanage
						<input type="radio" name="category" value="donor">Donor
					   </div></br>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="<?= BASEURL; ?>/authentication/login"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2022 Orphanage management System Signup Form. All rights reserved | Design by SpiraCare<a href="https://colorlib.com/" target="_blank"> |yusri|</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	
</body>
</html>