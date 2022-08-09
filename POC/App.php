<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="css/styles.css">

<body align="center">

<!--card -->
<div class="card1">
  <img src="avatar.jfif" alt="Avatar" style="width:100%">
  <div class="container1">
    <h2>Article Writer </h2>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;background-color: Red; ">Sign Up</button>
    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Log in </button>
  </div>
</div>


<!--For Signup Page-->

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <?php include 'html/signup.html' ?>
</div>

<!--For Login Page-->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <?php include 'html/login.html'?>
</div>


<script src="js/js_file.js"></script>

</body>
</html>
