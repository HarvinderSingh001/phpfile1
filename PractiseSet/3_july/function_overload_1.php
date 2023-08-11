<?php
  class A{
    function __call($methods,$arg){
        if($methods=='c'){
           $a=count($arg);
           {
            switch($a){
               case 0:
                echo "function with zero argument is called";
                break;
               case 1:
                echo "function with  one argument is  called ";
                break ;
               case 2:
                echo "function with two  argument is called";
                break;
               case 3:
                echo "function with three argument is  called  ";
                break;
                default:
                echo "funnction with more than three argument is  called";
            }
           }
        }
    }
  }
  $obj =  new A();
  $obj ->C(3,5);
?>