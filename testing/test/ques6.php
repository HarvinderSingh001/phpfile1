<?php
 function calculateFactorial($num){
    if($num<0){
    echo "your  enterd a negative number";
}
else{
    if($num==0){
        return  1;
    }
    else{
        return $num * (calculateFactorial($num - 1));
    }
}
 }
 echo calculateFactorial(5);
?>