<?php
class A{
    function __construct(){
        echo "HI this is a class A constructor";
    }
}
class B extends A{
        public function __construct(){
            echo "Hi  this is a class B constructor ";
        }
}
$b=new B();
 
?>