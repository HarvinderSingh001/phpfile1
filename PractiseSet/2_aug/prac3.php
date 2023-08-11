<?php
 $a = [1,2,3,4,5,1,2,3,4,5,1,2,3,4,5];
 $len=count($a);
 echo "<PRE>";
 print_r($a);
 echo "</PRE>";
 for($i=0;$i<$len;$i++){
    for($j=0;$j<$len-1;$j++){
        if($a[$j+1]>$a[$j]){
            $temp = $a[$j-1];
            $a[$j-1]=$a[$j];
            $a[$j]=$temp;
        }
    }
 }
 $len=count($a);
 echo "<PRE>";
 print_r($a);
 echo "</PRE>";