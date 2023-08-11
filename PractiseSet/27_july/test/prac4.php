<?php
$i = 1;
$array = [] ;
while( $i <= 100 ) {
    $array[ $i-1 ] = $i;
    $i++;
}
//   print_r( $array );
shuffle( $array );
echo  '<pre>';
print_r( $array );
echo '</pre>';
echo '<br>';
echo '<hr>';

function sum( $first, $second ) {
    global $array;
    if ( in_array( $first, $array ) ) {
        if ( in_array( $second, $array ) ) {
            $index1 = array_search( $first, $array );
            $index2 = array_search( $second, $array );
            if ( $index1<$index2 ) {
                for ( $i = $index1; $i <= $index2; $i++ ) {
                    static $sum = 0;
                    $sum = $sum + $array[ $i ];

                }
            } elseif ( $index2<$index1 ) {
                for ( $i = $index2; $i <= $index1; $i++ ) {
                    static $sum = 0;
                    $sum = $sum + $array[ $i ];

                }

            } else {
                echo 'your Entered the same number \n please wirte different numbers ';
            }

        }
        echo 'the sum is \n';
        echo $sum;
    }
}

sum( 2, 4 );
-echo gethostname();
?>