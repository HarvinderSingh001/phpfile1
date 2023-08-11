<?php
//  require("opps.php");
   class A{
      public $a;
      private $b;
      protected $c;

   }
   class B extends A{
      function a($a){
        $this->a=$a;
      }
    //   function b($b){
    //     $this->b($b);
    //   }
      function c($c){
        $this->c=$c;
      }
      function display(){
        echo $this->a;
        // echo $this->b;
        echo $this->c;
      }
   }
   $b=new B();
//    exit();
   $b->a(1);
//    $b->b(2);
   
   $b->c(3);
   $b->display();
//    include("oops0.php");
   echo "its okkay";
print_r(E_ERROR);
die("perfomance terminated");
?>