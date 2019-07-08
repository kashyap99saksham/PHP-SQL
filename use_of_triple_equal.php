<?php
   $a = 5;
   $b = '5';
   if($a==$b)
   {
       echo "BOTH ".$a." and ".$b." are equal<br>";
   }
   $c = 5;
   $d = '5';
   if($a===$b)    //it also check the data type of value 
   {
       echo "BOTH ".$a." and ".$b." are equal";
   }
   else
     echo "BOTH ".$a." and ".$b." are NOT equal";
?>