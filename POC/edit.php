<?php
include 'connect.php';
session_start();

$num=$_GET['num'];
$data=$_GET['data'];
echo "Editing :".$num;
$uname=  $_SESSION['name'];

$sql = "UPDATE article SET story='$data' WHERE id='$num' and uname='$uname'";

$result = mysqli_query($con,$sql);

if ($result=== TRUE) {
  echo "Record deleted successfully";
  header("location:home.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
s
?>