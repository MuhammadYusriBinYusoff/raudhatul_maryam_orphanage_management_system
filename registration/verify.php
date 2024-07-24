<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="logins.css">
</head>

<body>

<?php
require("config.php");

$ID = $_GET['id'];
$verify = "verify";

$sql = "UPDATE registration SET status ='$verify' WHERE id = '$ID'" ;

if (mysqli_query($conn, $sql)) {
?>
<div class="login-message">
		<h2 style="margin-left:16px;">You have succefully verify the user</h2>
</div>
<br>

<a href="../index.php" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>
		</div>
</a>
<?php

    } else {

?>
<a href="../index.php" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>
		</div>
</a>
<?php

        }
  mysqli_close($conn);
?>



</body>

</html>