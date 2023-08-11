<?php
     class A{
        private $a,$b;
        private function set($a,$b){
            $this->a=$a;
            $this->b=$b;
        }
        private function get(){
            echo $this->a;
            echo "<br>";
            echo $this->b;
            echo "<br>";
        }

        protected function getd($a,$b){
            self::set($a,$b);
            self::get();
        }
        function __construct(){
            echo "base class constructor is called";
        }
       }
       class B extends A{
           var $c; 
           function getc($a,$b,$c){
            Parent::getd($a,$b);
            $this->c=$c;
            echo $this->c;
           }
           function __construct($a,$b){
            echo "derived class constructor is called ";
            self::getd($a,$b);
           }
       }
       $c = new B(44,44);
       $c ->getc(1,2,3);
?>