<?php
 class B {
   static function b(){

    }
 }
 class A extends B{
    function a(){

    }
 }
 $a = new B();
 var_dump($a instanceof B);
?>