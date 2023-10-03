<?php 
session_start();

$email = 	$_SESSION["email"];
$password = $_SESSION["password"];


if(empty($email) || empty ($password)){
	header("location:login.php");
}

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
	
		<h1>Insert Form</h1>
		<form method="POST" action="insertData.php" enctype="multipart/form-data">
			<label>Name</label>
			<input type="text" placeholder="Enter name" name="f_name" required> <br> <br>
			<label>Description</label>
			<input type="text" placeholder="Description" name="f_description" required> <br> <br>
			<label>Purchased price</label>
			<input type="text" placeholder="Purchased Price" name="f_price" required> <br> <br>
			<label>Quantity</label>
			<input type="text" placeholder="Quantitiy" name="f_quantity" required> <br> <br>
			<label for="img">Picture:</label>
          <input type="file" name="uploadfile" id="uploadfile"><br><br>
			
			<input type="submit" value="INSERT">
		</form>
	
	
</body>
</html>