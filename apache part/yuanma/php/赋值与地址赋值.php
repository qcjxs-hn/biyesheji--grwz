<?php
//值传递
 /*  $a=10;
   $b=$a;
   $b=5;
   echo $a,$b,'</br>';*/
//引用传递
   $c=10;
   $d=&$c;
   $c1=5;
   $d1=($c>$c1);
   echo $c,$d,'</br>',$d1;
   ?>
