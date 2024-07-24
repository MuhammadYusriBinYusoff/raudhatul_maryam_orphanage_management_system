<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="logins.css">
</head>

<body>


<?php
require("config.php");



$query=mysqli_query($conn,"select * from registration");
while($row=mysqli_fetch_array($query)){
   // $id=$row['id'];

    $id = $row['id'];
   $email = $row['email'];
	$category = $row['category'];
    $status = $row['status'];

    if (($category == "donor" || $category == "orphanage") && $status=="") {

?>
<form method="post" action="verify.php?id=<?php echo $id ?>">

    <input type="submit" value="email: <?php echo $email ?>   category: <?php echo $category ?>">
  </form>

<?php
    }else {
        // The user is not a donor or orphanage, so there is no need to verify their registration
        //echo "This user is not a donor or orphanage and does not need to be verified.";
    }
}


?>
<a href="../index.php" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>


</body>

</html>
