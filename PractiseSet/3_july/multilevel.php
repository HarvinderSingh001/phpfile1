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
       class C extends B{
         var $d;
         function getd($d){
            $this->d=$d;
            echo $this->d;
         }
       }
       $d= new C();
       $d->set(1,2);
       $d->get();
       $d->getc(3);
       $d->getd(5);


?>