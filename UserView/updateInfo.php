<?php
$link = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");
 
// // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = "";
$email = "";
$password = "";
$ccDetails = "";
$reply;
if (isset($_POST["name"])){
    // $email = mysqli_real_escape_string($link, @$_POST['email']);
    // $password = mysqli_real_escape_string($link, @$_POST['pwd']);
    $name = $_POST["name"];
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $password = mysqli_real_escape_string($link, $_POST["pwd"]);
    $ccDetails = mysqli_real_escape_string($link, $_POST["cc"]);
}

$salt = uniqid('', true);
$algo = '6';
$cryptSalt = '$' .$algo. '$'.$salt;

$hashedPassword = crypt($password, $cryptSalt);
$pwSql = "";
$emailSql = "";
$ccSql = "";
$reply;
if ($password != "";){
    $pwSql = "update User set Password = '$hashedPassword' where Name = '$name'";
}
if ($email != ""){
    $emailSql = "update User set Email = '$email' where Name = '$name'";
}
if ($ccDetails != ""){
    $ccSql = "update User set CcDetails = '$ccDetails' where Name = '$name'";
}

if(mysqli_query($link, $emailSql) && mysqli_query($link, $pwSql) && mysqli_query($link, $ccSql)){
    $reply->feedback = "Information updated";
}
else{
    $reply->feedback = "Failed to update";
}

// $pwResult = mysqli_query($link, $pwSql) or trigger_error("Query Failed! SQL: $pwSql - Error: ".mysqli_error($link), E_USER_ERROR);

// $hashedPassword = $pwResult->fetch_array()['Password'];

// if(crypt($password, $hashedPassword) == $hashedPassword){
//     session_start();
//     $userTypeResult = mysqli_query($link, $userTypeSql) or trigger_error("Query Failed! SQL: $userTypeSql - Error: ".mysqli_error($link), E_USER_ERROR);
//     $userNameResult = mysqli_query($link, $userNameSql) or trigger_error("Query Failed! SQL: $userNameSql - Error: ".mysqli_error($link), E_USER_ERROR);
//     $_SESSION["username"] = $email;
//     $userType = $userTypeResult->fetch_array()["UserType"];
//     $userName = $userNameResult->fetch_array()["Name"];
// } else{
//     session_unset();
//     session_destroy();
//     $reply->error = "Incorrect email or password";
// }
 
// mysqli_close($link);

// $reply->email = $email;
// $reply->userType = $userType;
// $reply->userName = $userName;

$jsonReply = json_encode($reply);

header('Content-Type: application/json');
echo $jsonReply;
?>