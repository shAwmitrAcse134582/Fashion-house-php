<?php
	include "dbconnect.php";
	$ID=$_GET['del_ID'];
	
	$sql="DELETE FROM product WHERE ID='$ID'";
	
	if($conn->query($sql))
	{
		header('location:index.php');
		//echo "Successfully deleted.";
	}
	else
	 "Failed delete!";


$conn->close();
?>