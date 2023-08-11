<?php
 readonly class A{
  var int $a  ;
  var string $b ;
  function set($a,$b){
    $this -> a = $a;
    $this -> b = $b;
  }
//   readonly function get()
function get()
  {
    echo $this->a;PHP_EOL;
    echo $this->b;
  }
}
// $onj = new A();
// $onj->set(56,'hello');
// $onj->get();
// echo "<br>";
// $o = new A();
// $o->set(70,'shama');
// $o->get();
// echo "<br>";
// $onj->set(65,'mohali');
// $onj->get();
// echo "<br>";
session_start();
print_r($_SESSION['name']);
// session_destroy('name');
?>

/*
readonly 
 declare read only variables ;
1. must have  a datatype;
2. cannot  initialize in the class;
3. cannot used readonly for functions;
4. initialize object only once ;
5. readonly property cannot have default value
*/