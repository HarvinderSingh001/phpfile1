<?php
  class A{
    var $a,$b;
    function set($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    function get(){
        echo $this->a;
        echo "<br>";
        echo $this->b;
        echo "<br>";
    }
   }
   class B extends A{
       var $c; 
       function getc($c){
        $this->c=$c;
        echo $this->c;
        echo "<br>";
       }
   }
   class C extends A{
     var $d;
     function getd($d){
        $this->d=$d;
        echo $this->d;
     }
   }
   $b= new B();
   $b->set(11,12);
   $b->get();
   $c = new C();
   $b = new B();
   $b -> getc(4);
   $c->getd(3);
?>