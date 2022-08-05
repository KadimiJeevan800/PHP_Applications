<?php


$uname=$_POST["uname"];
$pass=$_POST["pswd"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

session_start();
// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT * FROM users where uname='$uname' and psw='$pass'";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
 echo "Hi ,",$uname;
 $_SESSION['name']=$uname;
 header("location:home.php");
}

else
{
 
echo "Error no user found";
}
?>