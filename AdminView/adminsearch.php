<!DOCTYPE html>
<html>
    <head>
        <title> Database (Admin Only)</title>
    </head>

<body>
<?php
$con=mysqli_connect("localhost","X34110222","X34110222","X34110222");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$name = mysqli_real_escape_string($con, $_REQUEST['name']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$contactno = mysqli_real_escape_string($con, $_REQUEST['contactno']);

$query = "";

if (!empty($name)){
  $query = "select * from User where Name = '{$name}'";
}
else if (!empty($email)){
  $query = "select * from User where Email = '{$email}'";
}
else if (!empty($contactno)){
  $query = "select * from User where Contact = '{$contactno}'";
}

$result = mysqli_query($con, $query);
echo "<table border='1'>
<tr>
<th>User ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Contact</th>
<th>UserType</th>
<th>CcDetails</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td>" . $row['Contact'] . "</td>";
echo "<td>" . $row['UserType'] . "</td>";
echo "<td>" . $row['CcDetails'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>