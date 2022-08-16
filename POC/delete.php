<?php
//It will delete the post by taking the Post-ID 
session_start();
include 'connect.php';
$num=$_GET['num'];
echo "Deleting".$num;

$uid=  $_SESSION['uid'];


$sql = "DELETE FROM article WHERE id='$num' and uid='$uid'";

$result = mysqli_query($con,$sql);

if ($result=== TRUE) {
  echo "Record deleted successfully";
  header("location:home.php");
} else {
  echo "Error deleting record: " . $conn->error;
}


?>