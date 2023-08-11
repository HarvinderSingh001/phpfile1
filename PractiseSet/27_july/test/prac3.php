<?php
  $num = 5;
  for($i=0;$i<$num;$i++){

    
    for($j=0;$j<$i+1;$j++){
        echo "&nbsp"."*"."&nbsp";
    }
    echo "<br>";
  }
  for($i=5;$i>0;$i--){
    for($j=0 ; $j<$i- 1 ;$j++){
        echo "&nbsp"."*"."&nbsp";
    }
    echo "<br>";
  }

?>