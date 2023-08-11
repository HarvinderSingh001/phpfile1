<?php
   class A{
      public $a ;
      private $b;
      protected $c;
      function a($obj){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
      }
      function ap(){
     echo  $this->a."<br>";
     echo  $this->b."<br>";
     echo  $this->c."<br>";
      }
   }
   class B extends A{
     function b($obj){
         SELF::a($obj);
     }
   }
   class C extends B{
        function c($obj){ 
        
        SELF::b($obj);
        }
   }
   $obj = new C();
   $obj->c($obj);
?>