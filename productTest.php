<?php
//Database connection [WeiXiong's Database]
$conn = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");

//Error message for database if connection does not succeed
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$allData = new mysqli("localhost", "X34110222", "X34110222", "X34110222");
$myArray = array();
if ($result = $allData->query("select * from Products")) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
}

$result->close();
$mysqli->close();

?>