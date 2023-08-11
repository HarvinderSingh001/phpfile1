<?php
  $a = [1,2,6,9,3,4,2,5,6,7,2,8,0,2,7];
  $count = 0 ;
  $num = 2 ; 
  function check($num){
    global $a;
  if(in_array( $num,$a )){
       for($i=0;$i<count($a);$i++){
          if($num == $a[$i]){
            global $count;
            $count++;
          }
       }
       global $count;
       echo $count;
  }
}
check(2);

?>