<?php
session_start();
 $_SESSION['user']=$_SESSION['name'];
?>

<html>

<body>
 welcome <?php 

echo  $_SESSION['name']."&nbsp;&nbsp;&nbsp;" ?>
<button> <a href="Logout.php"  />Logout</a></button></br>
<h1>List of Articles</h1>
<?php
$uname=$_SESSION['name'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

//session_start();
// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT * FROM article where uname='$uname'";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
 while($row = $result->fetch_assoc()) {
    echo "<b>post_id: " . $row["ID"]. "</b> - Creater: " . $row["uname"]. "</br> posted : " . $row["story"]. "<br>";
  }
}

else
{
 
echo "We are waiting for your articles";
}

?>

<h1>Posting module :</h1>
<form action="posting.php" method="POST">

  <label for="data"><b>Post here : </b></label></br>
 <textarea name="data" rows="10" cols="30">
 start from here.....
</textarea> </br>
 <input type="submit" value="Submit"> </br>

</form>
<h1>Deleting module :</h1>
<!--For Deleting-->
<form method="GET" action="delete.php">
 <input type="number" value="number" name="num" placeholder="Enter the Post_ID here.."> &nbsp;
 <button>Delete</button>
</form>
</br>

<h1>Editing module :</h1>
<!--For editing -->
<form method="GET" action="edit.php">
 <label><b>Changes for post : </b></label></br>
 <input type="number" value="number" name="num" placeholder="Enter the Post_ID here.."> </br>

 <textarea name="data" rows="10" cols="30">
 make changes ..
</textarea> </br>
 <button>edit</button>
</form>


</body>
</html>