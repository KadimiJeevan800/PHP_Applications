<?php
 include 'connect.php';
 $uname=$_SESSION['name'];

 $sql = "SELECT * FROM article where uname='$uname'";
 $result = mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num>0)
  { 
    while($row = $result->fetch_assoc()) {
     echo "<h3><b>Post_ID:</b> " . $row["ID"]. "</br>Posted : <I> " . $row["story"]. "</I></h3>";
     } 
  }

 else
 {
 
  echo "<h3>No Post, We are waiting for your articles</h3>";
 }

 ?>