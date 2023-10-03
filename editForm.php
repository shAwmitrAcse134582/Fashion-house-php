<?php
	include "dbconnect.php";
	session_start();
	$ID=$_GET['edit_ID'];

	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	

	if(empty($email) || empty ($password)){
		header("location:login.php");
	}
	$sql="SELECT * FROM product where ID='$ID'";
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
  <link rel="stylesheet" href="style.css">
   <head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:white;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: 80%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    textarea {
      height: 100px;
    }

    input[type="submit"] {
      background-color: #e74c3c;
      color: #fff; 
      padding: 10px 40px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      display: block; 
      margin: 0 auto; 
    }

    input[type="submit"]:hover {
      background-color:#1abc9c;
      border-radius: 10px;
    }
  </style>


</head>

<body>
<header>
            <div class="navbar">

                <div class="top-left">
                    <p>Fashion House</p>
                </div>

                <div class="top-right">

                    <div class="top-right-text">
                        <a href="index.php">Home</a>
                        <a href="About.php">About</a>
                        <a href="register.php">signin</a>
                        <a href="login.php">login</a>
						<a href="#">Admin</a>
                    </div>
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                        <i class="fa-regular fa-paper-plane-top"></i>
                    </div>
                </div>

            </div>

        </header>
	
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
		
	
</body>
