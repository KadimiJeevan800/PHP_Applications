<?php
//The page will get executed after the Sucessfull login in  and display the list of articles
 session_start();
?>

<html>
 <link rel="stylesheet" href="css/style.css">
<body>
  
 <h1 style="text-shadow: 2px 2px 5px red;
 color:white;background-color:black;border:3px solid white;;"> Welcome <?php 

 echo  $_SESSION['name']."&nbsp;&nbsp;&nbsp;" ?> 
  <button onclick="window.location='Logout.php';">LogOut</button></h1>

 

<!--Table element to display the data in format-->
<table >
 <thead>
  <tr>
       <th>     <h2>Posting module :</h2>      </th>
       <th>     <h2>Editing module :</h2>      </th>
       <th>     <h2>Deleting module :</h2>     </th>
  </tr>
 </thead>
<tbody>
<tr>

<td>

<form action="posting.php" method="POST">
  <label for="data"><b>Post here : </b></label></br>
 <textarea name="data" rows="10" cols="50">
  start..
 </textarea> </br>
 <button> Post</button>
</form>

</td>

<!--2 For editing Module-->
<td>

<form method="GET" action="edit.php">
 <label><b>Enter the Post-ID : </b></label></br>
 <input type="number" value="number" name="num" placeholder="Enter the Post_ID here.."> </br></br>
 <textarea name="data" rows="10" cols="40">
 change..
 </textarea> </br>
 <button>edit</button>
</form>

</td>

<!--For Deleting Module-->
<td>
<p>Note : Please give the correct post-id for deleting .</p>
<form method="GET" action="delete.php">
  <label><b>Enter the Post-ID : </b></label></br>
 <input type="number" value="number" name="num" placeholder="Enter the Post_ID here.."> &nbsp;
 <button>Delete</button>
 </form>
</br>

</td>
</tr>
</tbody>
</table>

<!--Displaying Article List -->
<h2>List of Articles :</h2>
 <?php
 include 'list.php';
?>

</body>
</html>