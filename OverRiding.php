<?php
class main{
  function greet()
 {
   print("Hello, From Main Class ");
 }
}

class D extends main
{
 function greet()
  {
   print("Hello , From Derived class "); 
  }
}
$obj = new main();
$obj->greet();
$obj1 = new D();
echo "</br>";
$obj1->greet();
?>
