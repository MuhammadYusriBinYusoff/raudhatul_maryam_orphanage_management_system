
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/js/bootstrap.js">
    <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<title>Log in</title>

<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

</head>
<body>

	<div class="main-w3layouts wrapper">
		<h1>Log in</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?= BASEURL; ?>/authentication/searchUser" method="post">
					<!--<input class="text" type="text" name="Username" placeholder="Username" required="">-->
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="Login">
				</form>
				<p>Didnt Sign up? <a href="<?= BASEURL; ?>/authentication"> Register Now!</a></p>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2022 We Care Login Form. All rights reserved | Design by SpiraCare we care<a href="https://colorlib.com/" target="_blank"> |yusri|</a></p>
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