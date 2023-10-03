<?php
	include "dbconnect.php";
	
	session_start();
	$s="SELECT * FROM product";
	$result=$conn->query($s);

	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	// echo $_SESSION["email"];

	if(empty($email) || empty ($password)){
		header("location:login.php");
	}
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product</title>
	<link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ea8d639258.js" crossorigin="anonymous"></script>

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
                        <a href="about.php">About</a>
                        <a href="register.php">signin</a>
                        <a href="login.php">login</a>
						<a href="admin.php">Admin</a>
                    </div>
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                        <i class="fa-regular fa-paper-plane-top"></i>
                    </div>
                </div>

            </div>

        </header>
<!-- main part -->


<style>
		
	</style>
</head>
<body>	
<div ID="logout" >
	<?php echo "$email"  ?>	<a href="logout.php" >
		Logout  </a>
		
</div> 
		<center>
			<h1> product List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Purchase_price</th>
					<th>Quantitiy</th>
					<th>Image</th>
					<th>EDIT</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$IDd=$r['id'];
					$nam=$r['name'];
					$Description=$r['description'];
					$Purchase_price=$r['price'];
					$Quantity=$r['quantity'];
					$image=$r['image'];
					
					echo "<tr>";
						echo "<td>". $IDd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $Description . "</td>";
						echo "<td>". $Purchase_price . "</td>";
						echo "<td>". $Quantity . "</td>";
						// echo "<td>". $image . "</td>";
						echo "<td> <a href='file_upload.php?edit_ID=$IDd'>upload</a></td>";
						echo "<td> <a href='editForm.php?edit_ID=$IDd'><button>Edit</button></a></td>";
						echo "<td> <a href='delete.php?del_ID=$IDd'><button>Delete</button></a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="6"><a href="insertForm.php"><button>Insert Record</button></a></td>
				</tr>
			</table>
		</center>

</body>
</html>



