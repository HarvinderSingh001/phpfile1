<?php
  function  &a(){
    $a = 10;
    $b = &$a;
    return $b;
  }
  $var  = &a();
  echo $var;
  $var+=12;
  echo $var;
  echo "<br>";
  $demo = &a();
  echo $demo;
?>