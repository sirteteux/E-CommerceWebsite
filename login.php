<?php
$email = "";
$password = "";
$reply;
if (isset($_POST["email"])){
    // $email = mysqli_real_escape_string($link, @$_POST['email']);
    // $password = mysqli_real_escape_string($link, @$_POST['pwd']);
    $email = @$_POST["email"];
    $password = @$_POST["pwd"];
}
$link = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");
 
// // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$userType = "";

$pwSql = "select Password from User where Email = '{$email}'";
$userTypeSql = "select UserType from User where Email = '{$email}'";

$pwResult = mysqli_query($link, $pwSql) or trigger_error("Query Failed! SQL: $pwSql - Error: ".mysqli_error($link), E_USER_ERROR);

$hashedPassword = $pwResult->fetch_array()['Password'];

if(crypt($password, $hashedPassword) == $hashedPassword){
    $userTypeResult = mysqli_query($link, $userTypeSql) or trigger_error("Query Failed! SQL: $userTypeSql - Error: ".mysqli_error($link), E_USER_ERROR);
    $userType = $userTypeResult->fetch_array()["UserType"];
} else{
    $reply->error = "Incorrect email or password";
}
 
mysqli_close($link);

$reply->email = $email;
$reply->userType = $userType;

$jsonReply = json_encode($reply);

header('Content-Type: application/json');
echo $jsonReply;
?>