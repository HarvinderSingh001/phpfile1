<?php
   $fname = 'harvinder';
   $lname = 'singh';
//    echo $GLOBALS['fname'] ;//global array  

   
   function a(){
    static $invoked = 3 ;
   $gl = 1;
     $invoked++;
     $gl++;
     echo $invoked , $gl;
   }
   a();
   a();
?>