<?php
	include "dbconnect.php";
	
	
	
	$filename = $_FILES["fileToUpload"]["name"];
	$temp= $_FILES["fileToUpload"]["tmp_name"];

	$folder="uploads/".$filename;
	echo $folder;
	move_uploaded_file($temp,$folder);
	// echo "<img src='$folder' height='100px' width='100px'  >"
// 	$target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }
$ID=$_GET['d_ID'];
	
	$name=$_POST['f_name'];
	$description=$_POST['f_description'];
	$Purchase_price=$_POST['Purchase_price'];
	$Quantity=$_POST['Quantity'];
    // $image=$_POST[$target_file ];
    // $image=$_POST['image'];
	$image="bhat";
	

	// echo $name,$description,$phone,$date;
	
	$sql="UPDATE product SET Name='$name', Description='$description' ,
	price='$Purchase_price', quantity='$Quantity',image='$folder'
	 where id='$ID'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>
