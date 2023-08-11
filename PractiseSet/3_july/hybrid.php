<?php
    trait A{
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
       trait B  {
           var $c; 
           use A;
           function getc($c){
            $this->c=$c;
            echo $this->c;
            echo "<br>";
           }
       }
       trait C{
        var $d;
        use A;
        use B;
        function getd($d){
           $this->d=$d;
           echo $this->d;
        }
      }
      class D{
        use B,C;
      }
      $d = new D();
      $d->set(3,4);
      $d->get();
      $d->getc(34);
      $d->getd(45);
?>