<?php
//all references must be unset() to destroy values in all references 
//   $a = 'harvinder';
//   $a1=&$a; //$a1 refers directly  
//   $a2=&$a1;//$a2 refers directly $a i.e $a refers
//   echo "$a1";
//   echo $a2;
//   unset($a);
//   // $a1 = null;
//   $a1 = 'hello';
//   // $a2 = 'hi'; //references update the  original value
//   echo "$a1";
//   echo $a2;
  // $a = 1;
  // $b = &$a;
  // $b = 2;
  // echo $a , $b;
  $a = 3 ; $b = 10 ;
  function swap(&$a , &$b){
       $temp1 = &$a;
       $temp2 = &$b;
       $num1 = $temp1;
       $num2 = $temp2;
       $temp1=$num2;
       $temp2=$num1;
          
  }
  echo "Before Swapping";
  echo "<br>";
  echo $a."<br>".$b;
  $c=&$a;
  $d=&$b;
  swap($c , $d);
  echo "<br>";
  echo "after swapping";
  echo "<br>";
      echo $a."<br>".$b;
?>