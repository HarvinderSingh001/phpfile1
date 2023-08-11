<?php
   trait A1{
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
   trait A2 {
       var $c; 
       function getc($c){
        $this->c=$c;
        echo $this->c;
        echo "<br>";
       }
   }
   class B {
     var $d;
     use A1;
     use A2;
     function getd($d){
        $this->d=$d;
        echo $this->d;
     }
   }
   $b = new B();
   $b -> set(2,3);
   $b ->get();
   $b->getc(23);
   $b ->getd(34);
   
?>