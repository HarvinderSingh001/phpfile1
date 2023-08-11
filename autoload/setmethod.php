<?php
   class A{
    private $a;
    function __set($a,$b){
        echo "you don't have access to initialize this property";
    }
    function __toString(){
         return "You cann convert the object to a string";
    }
   }
   $a= new A();
//    $a->b="harvinder";
echo $a;

?>


