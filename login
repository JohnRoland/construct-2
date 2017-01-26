<?php
$email = $_GET['femail'];
$password = $_GET['fpass'];
$con=mysqli_connect("127.0.0.1","construct","*snipped password*");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$qz = "SELECT IsMember FROM PlayerLoginData where EmailID='".$email."' and PassID='".$password."'"; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
  {
  echo $row['IsMember'];
  }
mysqli_close($con);
?>
