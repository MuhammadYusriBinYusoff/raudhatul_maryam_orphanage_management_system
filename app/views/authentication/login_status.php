<html>
	<head><title>Viewing Student Data</title>
    
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/logins.css">

    <head>
<body>

<div class="login-message">
		<img src="<?= BASEURL; ?>/assets/donor_red.png" alt=" icon">
		<h2>  You are now logged in as <?= $_SESSION["USER"];?> with access level <?= $_SESSION["CATEGORY"]; ?></h2>
</div>
<br>

<a href="<?= BASEURL; ?>/home" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>
		</div>
</a>

</body>