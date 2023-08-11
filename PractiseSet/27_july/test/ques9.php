<?php
  $a = [1,2,3,4,5];
  $len = count($a) - 1 ;
  for($i=0;$i<$len/2;$i++){
    $temp = $a[$i];
    $a[$i]=$a[$len - $i];
    $a[$len - $i]=$temp;
  }
  echo"<pre>";
  print_r($a);
echo"</pre>";
?>