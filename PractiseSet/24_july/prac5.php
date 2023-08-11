<?php
  $obj = (object)[3,6,5]; //typecaste  array in object of std class;
//   print_r($obj);          // std class is empty class used to  caste other variables into object 
  $a = (array)$obj;
//   print_r($a);
$ob = new \stdclass;   //okay
// print_r($ob);
$o = new class{};  //create anonumous class  object
print_r($o);  //class@anonymous object 
?>

//anonymous class  