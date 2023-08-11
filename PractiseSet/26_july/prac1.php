<?php
  abstract  class A{
     abstract protected function  a();
   }
   Class B extends A{
       function a(){
        echo "hello this is class b;";
      }
   }
   $obj = new B();
   $obj ->a();
?>