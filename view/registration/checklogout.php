<?php 
session_start(); // Start up your PHP Session
define('BASE_URL', '/Activity-PHP/raudhatul_maryam_orphanage_management_system/');

?>

<html>
	<head><title>Viewing Student Data</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="logins.css">

    <head>
<body>

<?php 
$_SESSION["Login"] = "NO";
$_SESSION["CATEGORY"] = "";
$_SESSION["STATUS"] = "";
unset($_COOKIE["success"]);


 
?>

<div class="login-message">
		<h2 style="margin-left:16px;">You have succesfully log out</h2>
</div>
<br>

<a href="<?php echo BASE_URL; ?>index.php" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>
		</div>
</a>


</body>

</html>
