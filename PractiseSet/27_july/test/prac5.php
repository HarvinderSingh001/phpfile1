<?php
 $string = 'Program';
 $start = strlen($string);
 var_dump($start);
 for($i=0;$i<$start;$i++){
     $arr[$i]=$string[$i];
 }
 print_r($arr);

?>