<?php

include 'connect.php';
$uname=$_POST["uname"];
$pass=$_POST["pswd"];


/*
//Hashing Method
session_start();
//$hashed_password = password_hash($pass, PASSWORD_DEFAULT);
$sql = "SELECT * FROM users where uname='$uname' ";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

if($num==1){
 while($row=$result->fetch_assoc()){
    if(password_verify($pass, $row['psw'])) {
    echo "Working";
break;
     $_SESSION['name']=$uname;
    header("location:home.php");
  } 
 }
}
else
{
echo "User Not Found";
}*/

session_start();
$sql = "SELECT * FROM users where uname='$uname' ";
$result = mysqli_query($con,$sql);
$row=$result->fetch_assoc();

// Store the cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  // Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "password";
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($row["psw"], $ciphering, 
      $decryption_key, $options, $decryption_iv);
echo $decryption; 

 if($decryption==$pass)
{
        $_SESSION['name']=$uname;
        header("location:home.php");
}
else
{
        echo"User Not Exits or Incorrect Password ";
}





/*//Normal Method Fw1TmBtgvKXkkZ2y4sQ/8Fc= 

session_start();

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
echo "Error no user found,Go Back to main page ";

}*/
?>