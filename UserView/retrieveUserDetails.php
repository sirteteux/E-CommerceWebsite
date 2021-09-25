<?php
$link = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");
 
// // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = "";
$email = "";
$password = "";
$contact = "";
$ccDetails = "";
$reply;
if (isset($_POST["email"])){
    $email = mysqli_real_escape_string($link, $_POST['email']);
}
$sql= "select Name, Contact, CcDetails from User where Email = '$email'";
$reply;

$sqlResult = mysqli_query($link, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($link), E_USER_ERROR);

if (mysqli_num_rows($sqlResult) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $reply->name = $row["Name"];
        $reply->email = $row["Email"];
        $reply->contact = $row["Contact"];
        $reply->cc = $row["CcDetails"];
    }
  } else {
    $reply->error = "No user found";
  }
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