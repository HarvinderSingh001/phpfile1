<?php
$arr = [ 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5 ];
$len = count( $arr );
// for ( $i = 0; $i<$len; $i++ ) {
//     for ( $j = 0; $j<$len-1 ; $j++ ) {
//         if ( $arr[ $j+1 ]<$arr[ $j] ) {
//             $temp = $arr[ $j+1 ];
//             $arr[ $j+1 ] = $arr[ $j ];
//             $arr[ $j ] = $temp;
//         }
//     }
// }

for($i=0;$i<$len;$i++){
    for($j=$i+1;$j<$len - 1;$j++){
        if($arr[$j+1]==$arr[$j]){

            echo "&nbsp" .$arr[$j]."&nbsp";
        }
        else{
            continue;
        }
    }
}
// echo '<pre>';
// print_r( $arr );
// echo '</pre>';

?>