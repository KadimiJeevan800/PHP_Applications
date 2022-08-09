<?php
session_start();
include 'connect.php';
$num=$_GET['num'];
echo "Deleting".$num;

$uname=  $_SESSION['name'];


$sql = "DELETE FROM article WHERE id='$num' and uname='$uname'";

$result = mysqli_query($con,$sql);

if ($result=== TRUE) {
  echo "Record deleted successfully";
  header("location:home.php");
} else {
  echo "Error deleting record: " . $conn->error;
}


?>