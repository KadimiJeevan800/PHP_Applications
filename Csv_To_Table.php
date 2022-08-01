<?php

if (($open = fopen("data.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $arr[] = $data; 
    }
  
    fclose($open);
  }


$c=count($arr);

//This Works for only 2 columns
for ($i=0;$i<$c;$i++)
{
   if($i==0)
   {
       echo "<table>
      <thead><tr>
       <th>".$arr[$i][0]."</th>
       <th>".$arr[$i][1]."</th>      
      </tr></thead>   
       <tbody>";
     continue;
   }
  echo "<tr>
         <td>".$arr[$i][0]."</td>  
          <td>".$arr[$i][1]."</td>  
        </tr>";
}
echo "</tbody>
</table>";

//---Sample Table Element--------------




/*

//$arr=array(array("Sno","Name"),array(1,"Jeevan"),array(2,"Sai"),array(3,"Avinash")
  //      ,array(4,"Likith"),array(5,"Ajay"),array(6,"Navin"));

 echo "<table>
      <thead><tr>
       <th>Sno</th>
       <th>Name</th>      
      </tr></thead>   
       <tbody>
       <tr>
         <td>1</td>  
          <td>Jeevan</td>  
        </tr>
      <tr>
         <td>2</td>  
          <td>Ajay</td>  
        </tr>
      <tr>
         <td>3</td>  
          <td>Avinash</td>  
        </tr>
       </tbody>
    </table> ";
*/
?>
