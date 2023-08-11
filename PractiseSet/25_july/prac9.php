<?php
//only for static or member function access
//parent , self , static
class A{
    static  $a = 34;
    
    protected function a(){
        echo "private class a ";
    }
    function a1(){
        echo self::$a;
        
    }
}
class B extends A{ 
    static  $b = 10 ;
    
    function b(){
      echo  self::$b;
      parent::a();
    }
}
$obj = new B();
$obj -> a1();
$obj ->b();

?>