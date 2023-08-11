<!-- <?php
  $array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",  //floating point caste to  integer to set index  
    true => "d",
);
var_dump($array);

?>
 -->


<?php
$arr = array(
         "a",
         "b",
    6 => "c",     //index will be start from 6 here 
         "d",
   "0" =>'hello'

);
$arr[] = 'harvinder singh '; //insert an item at the end 
print_r($arr);
?>