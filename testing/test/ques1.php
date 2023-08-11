<?php
 // static variable allows to access updated value of variable
 
 function a($a){
    static $num = 0;
     $num++;
     echo $num;
 }
 a();
 a();
 a();
 a();

?>