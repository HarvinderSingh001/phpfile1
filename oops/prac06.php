<?php
   $num1 = 2;
   $num2 = 10;
//    echo  "sum is " , $num1 + $num2 , "<br>",
//       "product is ", $num1 * $num2 ,"<br>" , 
//       "subtraction is ",$num1 - $num2,"<br>",
//       "division is ",$num1 / $num2 , "<br>",
//       "modules is " , $num1 % $num2 ,"<br>",
//       "power of ",$num1 , "raise to power",$num2 ,"is ",$num1**$num2,"<br>";

// echo "add assign" , $num1+=$num2,"<br>",
// "subtract assign" , $num1-=$num2,"<br>",
// "multiply assign" , $num1*=$num2,"<br>",
// "divide assign" , $num1/=$num2,"<br>",
// "% assign" , $num1%=$num2,"<br>";

// echo "and operator",$num1&$num2,"<br>",
//      "or operator",$num1|$num2,"<br>",
//      "xor operator ",$num1^$num2,"<br>",
    // echo  "not operator ",!$num2,<"<br>",
//      "left shift",$num1<<1,"<br>",
//      "right shift",$num2>>1,"<br>";

if($num1<>$num2){
    echo "this two numbers are not equal  ","<br>";
}
if($num1==$num2){
    echo "this two numbers are not  equal ","<br>";
}
if($num1===$num2){
    echo "this two numbers are of  same datatype","<br>";
}
if($num1!==$num2){
    echo "this two numbers  are not of  same datatype","<br>";
}
$spaceship = $num1<=>$num2;
if($spaceship==-1){
    echo "number1 is  smaller than number 2","<br>";
}
elseif($spaceship==0){
    echo "number 1 is equal to  number 2","<br>";
}
else{
    echo "number 1 is greater than number2","<br>";
}
?>