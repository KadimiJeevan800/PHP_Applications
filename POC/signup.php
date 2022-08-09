<?php
//connecting to Database
include 'connect.php';
$uname=$_POST["uname"];
$pass=$_POST["psw"];
$email=$_POST["email"];
//$hashed_password = password_hash($pass, PASSWORD_DEFAULT);


session_start();

  
// Store the cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "password";
  
// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($pass, $ciphering,
            $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";




$sql = "SELECT * FROM users where uname='$uname'";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
 echo "User already exist";
}

else
{
 $reg="insert into users(uname,psw,email) values('$uname','$encryption ','$email');";
 mysqli_query($con,$reg);
 echo "Registration Successful";
 header("location:App.php");
}

/*

hashing method 
$sql = "SELECT * FROM users where uname='$uname'";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
 echo "User already exist";
}

else
{
 $reg="insert into users(uname,psw,email) values('$uname','$hashed_password ','$email');";
 mysqli_query($con,$reg);
 echo "Registration Successful";
 header("location:App.php");
}
*/

?>