<?php
$productID = "";
if (isset($_POST['productID'])){
    $productID = @$_POST['productID'];
}

//Database connection [WeiXiong's Database]
$conn = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");

//Error message for database if connection does not succeed
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// $prodData = new mysqli("localhost", "X34110222", "X34110222", "X34110222");
// $myArray = array();
// if ($result = $prodData->query("select * from Products where serialNumber = '{$productID}'")) {

//     while($row = $result->fetch_array(MYSQLI_ASSOC)) {
//             $myArray[] = $row;
//     }
//     echo json_encode($myArray);
// }
$reply->prodid = $productID;
echo json_encode($reply);
// $result->close();
$mysqli->close();

?>