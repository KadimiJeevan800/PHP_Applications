<?php
session_start();
$uname=$_SESSION["user"];
$data=$_POST["data"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";


// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$reg="insert into article(uname,story) values('$uname','$data');";
mysqli_query($con,$reg);
echo "Registration Successful";
header("location:home.php");

?>