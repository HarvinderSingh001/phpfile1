<?php
  $a = 'hemchand';
//   var_dump(strlen($a));
//   $arr[0]='hi';
//   var_dump($arr);
//   var_dump(ord($a[0]));
$arr=[0];
  for($i=0;$i<strlen($a);$i++){
 
      $arr[$i]=ord($a[$i]);
  }
//   echo count($arr);
//   print_r($arr);
  sort($arr);
//   for($j=0;$j<count($arr);$j++){
//     $count = $j + 1  ;
    
//     $temp = $arr[$j];
//     $arr[$j]= $arr[$count];
//     $arr[$count]=$temp;
//   }
//   echo $arr[$j];
  $last = array_pop($arr);
  echo chr($last);

?>