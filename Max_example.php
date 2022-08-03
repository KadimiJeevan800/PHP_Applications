<?php

 $arr=array(1,2,3,4,-8,3,100,-200);
 $max=0;
 $c=count($arr);
 $i=0;
 for($i=0;$i<$c;$i++)
 {
  if($arr[$i]>$max)
    {
      $max=$arr[$i];
    }
 }

echo "Maximum element in array :".$max;
?>
