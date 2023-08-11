<?php
 trait demo{
    function a(){
        echo "this is trait demo function a";
        echo  "<br>";
    }
    function b(){
        echo "this is trait demo function b";
        echo  "<br>";
    }

    //final prevents redefining  of a function 
    final function c(){
        echo "this is trait demo function c final ";
        echo  "<br>";
    }
 }

 Class  A{
    
    function a(){
        echo "this is  class A function a ";
        echo  "<br>";
    }
    function b(){
        echo "this  is class A function b";
        echo  "<br>";
    }
 }
 class B extends A{
    use demo;
    function b(){
        echo "this is class B function b";
        echo  "<br>";
    }
 }
 $obj = new B();
 $obj->a(); //trait demo a() overrides class A a();
 $obj ->c();
?>