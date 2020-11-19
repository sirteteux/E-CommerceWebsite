<?php
$link = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");
 
// // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$email = "";
$password = "";
$reply;
if (isset($_POST["email"])){
    // $email = mysqli_real_escape_string($link, @$_POST['email']);
    // $password = mysqli_real_escape_string($link, @$_POST['pwd']);
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $password = mysqli_real_escape_string($link, $_POST["pwd"]);
}


$userType = "";

$pwSql = "select Password from User where Email = '$email'";
$userTypeSql = "select UserType from User where Email = '$email'";
$userNameSql = "select Name from User where Email = '$email'";

$pwResult = mysqli_query($link, $pwSql) or trigger_error("Query Failed! SQL: $pwSql - Error: ".mysqli_error($link), E_USER_ERROR);

$hashedPassword = $pwResult->fetch_array()['Password'];

if(crypt($password, $hashedPassword) == $hashedPassword){
    session_start();
    $userTypeResult = mysqli_query($link, $userTypeSql) or trigger_error("Query Failed! SQL: $userTypeSql - Error: ".mysqli_error($link), E_USER_ERROR);
    $userNameResult = mysqli_query($link, $userNameSql) or trigger_error("Query Failed! SQL: $userNameSql - Error: ".mysqli_error($link), E_USER_ERROR);
    $_SESSION["username"] = $email;
    $userType = $userTypeResult->fetch_array()["UserType"];
    $userName = $userNameResult->fetch_array()["Name"];
} else{
    session_unset();
    session_destroy();
    $reply->error = "Incorrect email or password";
}
 
mysqli_close($link);

$reply->email = $email;
$reply->userType = $userType;
$reply->userName = $userName;

$jsonReply = json_encode($reply);

header('Content-Type: application/json');
echo $jsonReply;
?>