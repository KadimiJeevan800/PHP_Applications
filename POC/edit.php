<?php
echo "Editing..";


$num=$_GET['num'];
$data=$_GET['data'];
echo "Deleting".$num;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

//session_start();
// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection


$sql = "UPDATE article SET story='$data' WHERE id='$num'";

$result = mysqli_query($con,$sql);

if ($result=== TRUE) {
  echo "Record deleted successfully";
  header("location:home.php");
} else {
  echo "Error deleting record: " . $conn->error;
}


$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
?>