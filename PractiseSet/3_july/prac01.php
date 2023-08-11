<?php
 class A{
    function __construct(){
        echo "base constructor";
    }
 }
 class B extends A{
    
    function __construct(){
      
        echo "derived class";
    }
    function a(){
        PARENT::__construct();
    }
 }
 $b = new B();
 $b->a();
?>