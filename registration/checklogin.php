<html>
	<head><title>Viewing Student Data</title>
    
    <link rel="stylesheet" href="style.css">

    <head>
<body>
<?php 
session_start(); // Start up your PHP Session
 
require('config.php');

// username and password sent from form
$myusername=$_POST["username"];
$mypassword=$_POST["password"];

$sql="SELECT * FROM user WHERE username='$myusername' and password='$mypassword'"; 

$result = mysqli_query($conn, $sql);  //ni untuk cari dalam database

$rows=mysqli_fetch_assoc($result); //return a set of rows number arrays available in the table //untuk tahu row berapa

$user_name=$rows["username"]; //just nak assign to value to user_name based on row yang dah dapat tahu tadi
$user_password=$rows["password"];
$user_level=$rows["level"];
$user_id=$rows["id"];
	
// mysqli_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){ //so takleh sama untuk both username and password for each user

// Add user information to the session (global session variables)		
$_SESSION["Login"] = "YES";
$_SESSION["USER"] = $user_name;
$_SESSION["PASSWORD"] = $user_password;
$_SESSION["LEVEL"] =$user_level;
$_SESSION["USERID"] =$user_id;



echo "<h2>You are now logged in as ".$_SESSION["USER"]." with access level ".$_SESSION["LEVEL"]."</h2>";

echo "<a href='site.php'>Enter the system</a><br/><br/>"; 


    echo "<a href='index.php'>Back to login page</a>";

//if wrong username and password
} else {
	
$_SESSION["Login"] = "NO";
header("Location: index.php");
}

mysqli_close($conn);

?>

</body>
