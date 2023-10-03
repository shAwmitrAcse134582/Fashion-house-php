<?php
	include "dbconnect.php";
	session_start();
	$ID=$_GET['edit_ID'];

	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	

	if(empty($email) || empty ($password)){
		header("location:login.php");
	}
	$sql="SELECT * FROM product where ID='$ID'" ;
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$Description=$arr['description'];
	$Purchase_price=$arr['price'];
	$Quantity=$arr['quantity'];
    $image=$arr['image'];

?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_ID=<?php echo $ID?>"  enctype="multipart/form-data">
			<label>Name</label>
			<input type="text" value= " <?php echo $nam ?> " name="f_name" required> <br> <br>

			<label>Description</label>
			<input type="text" placeholder="Description" value= " <?php echo $Description ?> " name="f_description" required> <br> <br>
			
			<label>Purchase price</label>
			<input type="text" placeholder="Purchase_price" value= " <?php echo $Purchase_price ?> " name=" Purchase_price" required> <br> <br>
			
			<label>Quantity</label>
			<input type="text" placeholder="Quantity" value= " <?php echo $Quantity ?> " name="Quantity" required> <br> <br>

            <!-- <label>Image</label>
			<input type="text" placeholder="Image" value= " <?php echo $image ?> " name="Image" required> <br> <br> -->
			<!-- <center>	
				<h1>File Uploading Test</h1>
				<form action="upload.php" method="post" enctype="multipart/form-data">
	  				<label>Select your file:</label>
	  				<input type="file" name="file_name" id="file_upload"> <br/> <br/>
	  				<input type="submit" value="Upload" name="submit">
				</form>
			</center> -->
			<label>Select your file:</label>
			<input type="file" name="fileToUpload" id="fileToUpload"> <br/> <br/>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>