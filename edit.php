<?php
	include "dbconnect.php";
	
	$ID=$_GET['d_ID'];
	
	$name=$_POST['f_name'];
	$description=$_POST['f_description'];
	$Purchase_price=$_POST['Purchase_price'];
	$Quantity=$_POST['Quantity'];
    $image=$_POST['image'];
	

	// echo $name,$description,$phone,$date;
	
	$sql="UPDATE product SET Name='$name', Description='$description' ,
	price='$Purchase_price', quantity='$Quantity',image='$image'
	 where id='$ID'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>