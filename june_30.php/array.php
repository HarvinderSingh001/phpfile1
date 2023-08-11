<?php
$array = array(

    1 => 'a',

    '1' => 'b',

    1.5 => 'c',

    -1 => 'd',

    '01' => 'e',

    

    true => 'g',


    " "=> 'i',

    null => 'j',

    'k',
    1.8 => 'f',

    2 => 'l',
    false => 'h'
);
$mul=[
       [2=>"he" , 1 => "hi" , 0 =>"namaste"],
       [2=>"hell0","namaste"],
       [1=>"hellooo",'1'=>"harvinder"]
     ];
$b= [2=>"hz" , 6 => "hi" , 0 =>"namaste"];
$a =[3,3,5,5,6,6,6,7];
print_r($array);
echo "<br>";
print_r(array_keys($array));
echo "<br>";
echo (in_array('g',$array));
echo "<br>";
print_r(array_search('f',$array));
echo  "<br>";
print_r(array_column($mul,'2'));
echo "<br>";
print_r(ksort($b));
sort($mul);
sort($b);
sort($a);
print_r($b);
echo "<br>";
print_r($a);
echo "<br>";
print_r($mul);
echo "<br>";
print_r(array_search("hi",$mul));
echo "<br>";
print_r(array_column($mul,"0"
));
print_r($array);
?>