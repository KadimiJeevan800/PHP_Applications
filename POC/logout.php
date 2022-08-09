<?php
session_start();
session_destroy();
echo "Session Stopped";
header("location:App.php");
?>