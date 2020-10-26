<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>
<?php
$link = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "select Password from User where Email = '{$email}'";

$result = mysqli_query($link, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($link), E_USER_ERROR);

if(crypt($password, $result) == $result){
    echo "<p>Login success</p>";
} else{
    echo "<p>ERROR: Could not able to execute, $result</p>";
}
 
mysqli_close($link);
?>
	<br>
	<p><a href="http://ceto.murdoch.edu.au/~34095187/index.html">Direct link to home</a></p>

</body>
</html>