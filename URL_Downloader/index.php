<html>
<head>
<title>Doc</title>
<style>
label,input {
  width: 30%;

}
body
{
border-style: solid;
border: 5px solid green;
border-radius: 12px;
background-color: lightblue;

}
h1
{
text-shadow: 2px 2px red;
}

button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
padding: 10px 24px;
}
button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<h1>Free Download From URL  </h1>
</br>
 
<form action="resp.php" method="post">
  <label for="inp"><h2> Enter URL : </h2></label>
  <input type="text" id="inp" name="inp" placeholder="Enter URL Here" > &nbsp;
  <button>Download </button> </br>
</form>
<?php 
 echo "Working....";
?>
</body>
</html>