<?php 
	session_start();
	$db = mysqli_connect('localhost', 'X34110222', 'X34110222', 'X34110222');

	// initialize variables
	$productname = "";
	$price = "";
	$category = "";
	$id = "";
	$update = false;

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$productname = $_POST['productname'];
	$price = $_POST['price'];
	$category = $_POST['category'];


	mysqli_query($db, "UPDATE Products SET productName='$productname', price='$price', category='$category' WHERE serialNumber=$id");
	$_SESSION['message'] = "Product updated!"; 
	header('location: AdminProductEdit.php');
	}

	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM User WHERE serialNumber=$id");
	$_SESSION['message'] = "Product deleted!"; 
	header('location: AdminProductEdit.php');
	}
