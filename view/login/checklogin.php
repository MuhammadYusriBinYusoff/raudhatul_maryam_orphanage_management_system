<html>
	<head><title>Viewing Student Data</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="logins.css">

    <head>
<body>
<?php 
session_start(); // Start up your PHP Session
define('BASE_URL', '/Activity-PHP/raudhatul_maryam_orphanage_management_system/');
 
require('config.php');

// username and password sent from form
//$myusername=$_POST["Username"];
$myemail = $_POST["email"];
$mypassword=$_POST["password"];

//$sql="SELECT * FROM registration WHERE username='$myusername' and password='$mypassword' and email='$myemail'"; 
$sql="SELECT * FROM registration WHERE password='$mypassword' and email='$myemail'";

$result = mysqli_query($conn, $sql);  //ni untuk cari dalam database

$rows=mysqli_fetch_assoc($result); //return a set of rows number arrays available in the table //untuk tahu row berapa

$user_name=$rows["username"]; //just nak assign to value to user_name based on row yang dah dapat tahu tadi
$user_password=$rows["password"];
$user_email=$rows["email"];
$user_category=$rows["category"];
$user_status=$rows["status"];
	
// mysqli_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1 && $user_status=="verify"){ //so takleh sama untuk both username and password for each user

// Add user information to the session (global session variables)		
$_SESSION["Login"] = "YES";
$_SESSION["USER"] = $user_name;
$_SESSION["PASSWORD"] = $user_password;
$_SESSION["EMAIL"] =$user_email;
$_SESSION["CATEGORY"] =$user_category;
//setcookie("success","success",time()+86400,"http://localhost/Activity-PHP/orphanage%20management%20system%20group3/gym-html-template/index.php");

?>

<div class="login-message">
		<img src="icon.png" alt=" icon">
		<h2>  You are now logged in as <?php echo $_SESSION["USER"]?> with access level <?php echo $_SESSION["CATEGORY"] ?></h2>
</div>
<br>

<a href="<?php echo BASE_URL; ?>index.php" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>
		</div>
</a>

<?php



//if wrong username and password
} else {
	
$_SESSION["Login"] = "NO";
header("Location: login.html");
}

mysqli_close($conn);

?>

</body>
