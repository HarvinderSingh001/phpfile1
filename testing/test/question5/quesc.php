<?php
   class  A{
      function hello(){
        echo __FUNCTION__;
        echo "<br>";
        echo __METHOD__;
        echo "<br>";
        echo __CLASS__;
        echo "<br>";
        echo __LINE__;
        echo  "<br>";
      }
   }
   class B extends A{
    function hi(){
        echo __FUNCTION__;
        echo "<br>";
        echo __METHOD__;
        echo "<br>";
        echo __CLASS__;
        echo "<br>";
        echo __LINE__;
        echo  "<br>";
      }
   }
   $obj = new A();
   $obj->hello();
   $obj = new B();
   $obj ->hi();

   echo __FILE__;
   echo "<br>";
   echo __DIR__;
?>