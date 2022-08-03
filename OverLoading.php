<?php

class shape {
     
    function __call($name_of_function, $arguments) {
             
        if($name_of_function == 'area') {
             
            switch (count($arguments)) {
                case 1:
                    return 3.14 * $arguments[0]*$arguments[0];
                         
                case 2:
                    return $arguments[0]*$arguments[1];
            }
        }
    }
}
     
$obj = new Shape;
     
echo("Area of Circle : ".$obj->area(2));
echo "</br>";
     
echo ("Area of Rectangle :".$obj->area(4, 2));
?>
