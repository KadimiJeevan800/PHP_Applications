<?php
session_start();
//It will add the post in the database by taking the details from the mysql database
include 'connect.php';
$uname=$_SESSION["name"];
$data=$_POST["data"];
$uid=$_SESSION["uid"];
$reg="insert into article(story,uid) values('$data','$uid');";
mysqli_query($con,$reg);
echo "Registration Successful";
header("location:home.php");

?>