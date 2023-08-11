<?php
  class A {
    private $a ,  $b;
    function aset($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    function aget($a,$b){
        echo $this->a."<br>";
        echo $this->b."<br>";
    }
  }
  class B extends A{
     private  $c ;
     function bset($c){
        $this->c = $c;
     }
  }
  class C extends B{
     public function cp($a,$b,$c){
        echo $this ->a."<br>";
        echo $this ->b."<br>";
     }
  }
  $obj = C();
  $obj -> cp();
?>