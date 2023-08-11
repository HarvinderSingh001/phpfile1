<?php
//   $ar = [2,3,3,3,3,4,5,6,5,8,34,44,55,66,55,55,66,66,65,65,11,11,12,21,21,554,6665,43,5,3,43,2,2,1,1,1,3232,3232,1,1,1,1,1,1,4343,43434,4343,111,121,111,121,121,222];
$ar = [1,2,3,4,5,1,2,3,4,5,1,2,3,4,5];
  $len  =  count($ar);
  print_r($len);
  echo "<br>";
  sort($ar);
  $n = 0;

  for($i=0;$i<count($ar)  ;$i++){
    if($ar[$i]==$ar[$i + 1]){
        $temp[$n] = $ar[$i];
        $n++;
        continue;
    }
    else if($i == $len - 1 ){
        echo $ar[$i];
    }
    else{
        echo $ar[$i];
        echo "<br>";
    }
  }
  echo "<br>";
  echo "<pre>";
  print_r($temp);
  echo "</pre>";
?>