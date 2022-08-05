<?php

$uname=$_POST["uname"];
$pass=$_POST["psw"];
$email=$_POST["email"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

session_start();
// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT * FROM users where uname='$uname'";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
 echo "User already exist";
}

else
{
 $reg="insert into users(uname,psw,email) values('$uname','$pass','$email');";
mysqli_query($con,$reg);
echo "Registration Successful";
header("location:App.php");
}


?>