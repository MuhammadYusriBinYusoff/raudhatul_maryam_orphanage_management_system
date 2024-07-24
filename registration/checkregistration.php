<html>
	<head><title>Viewing Student Data</title>
    
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="logins.css">

    <head>
<body>

<?php
	$username = $_POST['Username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$category =$_POST['category'];

	require("config.php");

	try{
	$sql = "INSERT INTO registration(username, password,email, category) VALUES ('$username','$password', '$email','$category')";

	
	if(mysqli_query($conn,$sql)){

?>
<div class="login-message">
		<h2 style="margin-left:16px;">You have succesfully registered</h2>
</div>
<br>

<a href="../index.php" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>
		</div>
</a>

<?php
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
	
		$sql = "ALTER TABLE requestitem AUTO_INCREMENT =1"; //CHANGE TABLE NAME
		if($conn->query($sql) == TRUE){
			//echo "Record ALTER succesfully";
		}else{
			//echo"Error ALTER record: " . $conn->error;
		}
			} else {
				//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		
		}catch(Exception $e){

?>
<div class="login-message">
		<h2 style="margin-left:16px;">Sorry, the account already existed</h2>
</div>
<br>

<a href="../index.php" class="button">
		<div class="box">
		  <span>Back to Main Page</span>
		  <i class="fas fa-arrow-left"></i>
	
<?php
	
	}

	mysqli_close($conn);



	// Database connection
	
?>

</body>

</html>