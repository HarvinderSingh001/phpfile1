<?php
//    for($a=1;$a<=5;$a++){
//       for($b=1;$b<=$a;$b++){
//            echo "*"." ";
//       }
//       echo "<br>";
//    }
//    for($a=5;$a>=1;$a--){
//       for($b=1;$b<=$a;$b++){
//            echo "*"." ";
//       }
//       echo "<br>";
//    }

for($a=5;$a>=1;$a--){
    for($c=5-$a;$c>0;$c--){
        echo "&nbsp";
    }
    for($b=$a;$b>=1;$b--){
        echo "&nbsp*&nbsp";
    }
    echo "<br>";
}

// for($a=1;$a<=5;$a++){
//     for($b=1;$b<=5-$a;$b++){
//         echo "&nbsp;";
//     }
//     for($c=1;$c<=$a;$c++){
//         echo "*";
//     }
//     echo "<br>";
// }
?>