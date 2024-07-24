<?php


require ("config.php");
$query=mysqli_query($conn,"select * from registration");
while($row=mysqli_fetch_array($query)){
	$id=$row['id'];//PLEASE CHANGE ACCORDING TO YOUR DATABASE AUTO-INCREAMENT ID
	$sql = "UPDATE registration SET id=$number WHERE id=$id";
	if($conn->query($sql) == TRUE){
		//echo "Record RESET succesfully<br>";
	}
	$number++;
}


// Retrieve the user's registration status
$result = mysqli_query($db, "SELECT status FROM users WHERE id = '$user_id'");
$row = mysqli_fetch_assoc($result);
$status = $row['status'];

if ($status == "donor" || $status == "orphanage") {
  // Display the form or page for the admin to verify the user's registration
  ?>
  <form method="post" action="verify.php">
    <input type="submit" value="Verify">
  </form>
  <?php
} else {
  // The user is not a donor or orphanage, so there is no need to verify their registration
  echo "This user is not a donor or orphanage and does not need to be verified.";
}

?>


$query=mysqli_query($conn,"select * from registration");
		$number=1;
		while($row=mysqli_fetch_array($query)){
			$id=$row['id'];//PLEASE CHANGE ACCORDING TO YOUR DATABASE AUTO-INCREAMENT ID
			$sql = "UPDATE registration SET id=$number WHERE id=$id";
			if($conn->query($sql) == TRUE){
				//echo "Record RESET succesfully<br>";
			}
			$number++;
		}