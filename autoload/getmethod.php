<?php
  class A{ 
    private $data=['name'=>'harvinder','age'=>21,'vill'=>'jarodi'];
  function __get($a){
   echo "this  is a private property you dont have access to access it ";
  }
}

$yash=new A();
  echo $yash->a;
?>