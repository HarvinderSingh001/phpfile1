<?php
  class A{
    private $a =5;
    private function a(){
        echo "your invoked a private function of class A";
    }
    function __unset($property){
         unset($this->$property);
    }
  }
  $obj = new A();
  
  unset($obj->a);
  echo $obj->a;
?>