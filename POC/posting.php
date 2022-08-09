<?php
session_start();

include 'connect.php';
$uname=$_SESSION["user"];
$data=$_POST["data"];

$reg="insert into article(uname,story) values('$uname','$data');";
mysqli_query($con,$reg);
echo "Registration Successful";
header("location:home.php");

?>