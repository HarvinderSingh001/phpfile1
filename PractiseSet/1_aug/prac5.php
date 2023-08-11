<?php
$arr1 = [
    [ 1, 2, 3 ],
    [ 1, 2, 4 ],
    [ 1, 2, 3 ]
];
$arr2 = [
    [ 1, 2, 3 ],
    [ 1, 2, 4 ],
    [ 1, 2, 3 ]
];
// echo '<pre>';
// print_r( $arr1 );
// echo '</pre>';
for ( $i = 0; $i<3; $i++ ) {
    for ( $j = 0; $j<3; $j++ ) {
        echo $arr1[ $i ][ $j ] + $arr2[ $i ][ $j ]  .'&nbsp';
    }
    echo '<br>';
}
for ( $i = 0; $i<3; $i++ ) {
    for ( $j = 0; $j<3; $j++ ) {
        echo $arr1[ $i ][ $j ] + $arr2[ $i ][ $j ]  .'&nbsp';
    }
    echo '<br>';
}
?>