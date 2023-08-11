<?php
  $ar = [1,2,3,5,6];
  for($i=0;$i<count($ar) + 1;$i++){
    if($i<3){
        $temp[$i]=$ar[$i];
    }
    
    if($i==3){
        $i = 3 ;
        $temp[$i]=4;
    }
    if($i>3){
        $temp[$i] = $ar[$i - 1];
    }
  }
  print_r($temp);
?>