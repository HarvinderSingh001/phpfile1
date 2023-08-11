<?php
  $a = 'hemchand';
$arr=[0];
  for($i=0;$i<strlen($a);$i++){
 
      $arr[$i]=ord($a[$i]);
  }

  sort($arr);
  for($j=0;$j<count($arr);$j++){
    $count = $j + 1  ;
    
    $temp = $arr[$j];
    $arr[$j]= $arr[$count];
    $arr[$count]=$temp;
  }
  echo $arr[$j];
?>