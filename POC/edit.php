<?php
//It will Edit the post by taking the Post-ID 
include 'connect.php';
session_start();

$num=$_GET['num'];
$data=$_GET['data'];
echo "Editing :".$num;
$uid=  $_SESSION['uid'];

$sql = "UPDATE article SET story='$data' WHERE id='$num' and uid='$uid'";

$result = mysqli_query($con,$sql);

if ($result=== TRUE) {
  echo "Record deleted successfully";
  header("location:home.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
s
?>