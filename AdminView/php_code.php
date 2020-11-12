<?php 
	session_start();
	$db = mysqli_connect('localhost', 'X34110222', 'X34110222', 'X34110222');

	// initialize variables
	$name = "";
	$email = "";
	$contact = "";
	$usertype = "";
	$id = 0;
	$update = false;

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$usertype = $_POST['usertype'];


	mysqli_query($db, "UPDATE User SET Name='$name', Email='$email', Contact='$contact', UserType='$usertype' WHERE id=$id");
	$_SESSION['message'] = "User updated!"; 
	header('location: AdminAccountEdit.php');
	}

	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM User WHERE id=$id");
	$_SESSION['message'] = "User deleted!"; 
	header('location: AdminAccountEdit.php');
	}
