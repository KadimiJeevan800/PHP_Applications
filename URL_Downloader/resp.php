<html>
<body>

Welcome User ...<br>
Your have entered : <?php echo $_POST["inp"]; ?></br>

<?php
 $url = $_POST["inp"];
    // url : https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png
      
  if(!empty($url))
 {
    // Use basename() function to return the base name of file
    $file_name = basename($url);
      
    // Use file_get_contents() function to get the file
    // from url and use file_put_contents() function to
    // save the file by using base name
    if (file_put_contents($file_name, file_get_contents($url)))
    {
        echo "File downloaded successfully";
    }
    else
    {
        echo "File downloading failed.";
    }
}
else
{
 echo "<h3>File Not Found</h3>"; 
}
?>

</body>
</html>