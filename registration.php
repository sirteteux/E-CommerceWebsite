<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$contactno = mysqli_real_escape_string($link, $_REQUEST['contactno']);
$creditcard = mysqli_real_escape_string($link, $_REQUEST['creditcard']);

$sql = "insert into User values(null, '$name','$email', '$password', '$contactno', 'admin', '$creditcard')";

if(mysqli_query($link, $sql)){
    echo "<p>Records added successfully.</p>";
} else{
    echo "<p>ERROR: Could not able to execute $sql. </p>" . mysqli_error($link);
}
 
mysqli_close($link);
?>
	<br>
	<p><a href="http://ceto.murdoch.edu.au/~34095187/index.html">Direct link to home</a></p>

</body>
</html>