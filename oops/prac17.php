<?php
  // $a=[
  //   'k1'=>"harvinder",
  //   'k2'=>'hi','hlo',
  //   'k3'=>'valbinder',
  //   'kaise h aap sab'
  // ];
  // $b=[
  //    'k1'=>"harvinder",
  //    'k2'=>"hi",
  //    'k3'=>"kaise"
  //    ,'kaise h aap sab'
  //    ,'hlo'
  // ];
  // print_r(array_intersect($a,$b));
  // $n=10;
  // for($i=0;$i<$n;$i++){
  //   for($s=$n-1 + $i;$s>0;$s--){
  //     echo "&nbsp";
  //   }
  //   for($j=$i;$j<$n;$j++){
  //          echo "*";
  //   }
  //   echo "<br>";
  // }

  $n=10;
  for($i=0;$i<$n;$i++){
    for($s=$n-$i-1 ;$s>0;$s--){
      echo "&nbsp";
    }
    for($j=1;$j<$i;$j++){
           echo "*";
    }
    echo "<br>";
  }
?>