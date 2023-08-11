<?php
  class A{
    private $a;
    function __set($property,$value){
        if(property_exists(__class__,$property)){
            $this->$property = $value;
        }
        else{
            echo "You try to access undefined property of ".__class__;
        }
    }
    function get(){
        echo $this->a;
    }
  }
  $z = new A();
  $z->a = 4;
  $z->get();
?>