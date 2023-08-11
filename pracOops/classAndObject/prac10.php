<?php
 trait A{
    var $a = 10;
    function b(){
        echo 'A';
    }
 }
 trait B{
    // var $a = 20;
    function b(){
        echo "B";
    }
 }
 
 class C{
    use A, B {
       A::b insteadof B;
    }
 }
 $obj = new  C();
 $obj->b();
//  echo $obj->a;