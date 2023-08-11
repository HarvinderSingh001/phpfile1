<?php
//    $var= ["harvinder"=>145,34343,"ravinder"=>23,"kulvinder"=>25,"balvinder"=>53,"joginder"=>234];
// $a =["harvinder","ravinder","2323",343,2332,"joginder","balvider","narinder"];
// print_r (array_chunk($a,3));
// echo count($a);
// sort($a);
// $var=array_reverse($a);
// foreach($var as $k=>$b){
//     print_r($k .  
//     $b." "."<br>");
// }
// print_r(array_change_key_case($a,CASE_UPPER));
// $name1=array("sonoo","john","vivek","smith");    
// $name2=array("umesh","sonoo","kartik","smith");    
// // $name3=array_intersect($name1,$name2);
// $key = array_search("john","smith",$name1,$name2);
// var_dump($key);
// print_r($name3);
$a=["hello"=>"bye","1"=>"2","test"];
$b=['a','b','c','d'];
// // $arr=array_combine($a,$b);
$arr=array_merge($a,$b);
print_r($arr);
?>