<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "select password from User where Email = '{$email}'";

if(crypt($password, mysqli_query($link, $sql) == mysqli_query($link, $sql)){
    echo "<p>Login success</p>";
} else{
    echo "<p>ERROR: Could not able to execute $sql. </p>" . mysqli_error($link);
}
 
mysqli_close($link);
?>
	<br>
	<p><a href="http://ceto.murdoch.edu.au/~34095187/index.html">Direct link to home</a></p>

</body>
</html>