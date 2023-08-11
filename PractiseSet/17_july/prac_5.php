<?php
 class A{
    static function a(){
        echo "static fuction callled";
    }
    function b(){
       static::a();
    }
    
 }
 $obj = new A();
 $obj -> b();

?>