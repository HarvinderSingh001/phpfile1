<?php
   class A{
    private $a = 4 ;
    var $b = 3;
    protected $c = 2;
    function a(){
        echo $this->a;
        echo $this->b;
        echo $this->c;
    }
   private function b(){
        echo "hello sir";
    }
   }
   class B extends A{
      function c(){
        // echo $this->a;//error private cannot be accessed 
        echo $this->b;
        echo $this->c;
      }
   }
   $obj = new A();
   $obj ->a();
//    $obj ->b();//error because declare as private
   $obj1 = new B();
   $obj1->c();
?>