<hr>
<?php
$num = 16;
$temp = $num;
for($i=0;$i<$num;$i++){
    for($j=0;$j<$i;$j++){
        echo "&nbsp";
    }
    for($k=$temp ; $k>0 ;$k--){
        echo "*";
    }
    $temp--;
    echo "<br>";   
}
for($i=0;$i<$num - 1 ;$i++){
    for($m=$num - 2 -$i;$m>0;$m--){
        echo "&nbsp";
    }
    for($n=0;$n<$i+2 ;$n++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<?php
$temp = $num -1;
if($num%2==0){
for($i=0;$i<$num ;$i++){
    for($k=0;$k<$num ;$k++){
        if($i>0 && $i<$temp &&$k>0 && $k<$temp){
            for($m=0;$m<$num/4;$m++){
                echo "&nbsp";
            }
        }
        else{
            echo "&nbsp*&nbsp";
        }
    }
    echo "<br>";
}}
else{
    $count=0;
    $count1=0;
    for($i=0;$i<$num ;$i++){
        for($k=0;$k<$num ;$k++){
            if($i>0 && $i<$temp &&$k>0 && $k<$temp){
                for($m=0;$m<$num/4 ;$m++){
                    echo "&nbsp";
                   
                    $count++;
                }
            }
            else{
                echo "&nbsp*&nbsp";
               
                $count1++;
            }
        }
        echo "<br>";
}
echo $count ;
echo "<br>";
echo $count1;
}
?>
<hr>
<?php
$temp = $num - 1;
for($i=0;$i<$num ;$i++){
     for($j=$temp ;$j>0;$j--){
        echo "&nbsp&nbsp";
     }
     $temp--;
     for($k=0;$k<$i+1;$k++){
        echo "*";
     }
     
     echo "<br>";
}
?>
<hr>
<?php
$temp = $num ;
 for($i=0;$i<$num ;$i++){
    for($j=$temp; $j>0;$j--){
        echo "*";
    }
    $temp--;
    echo "<br>";
 }

?>
<hr>
<?php
$temp = $num ;
for($i=0;$i<$num ;$i++){
    for($k=0;$k<$i + 1 ;$k++){
        echo "*";
    }
    echo "<br>";
}
for($i=0;$i<$num ;$i++){
    for($k=$temp - 1;$k>0 ;$k--){
        echo "*";
    }
    $temp--;
    echo "<br>";
}

?>

<hr>

<?php

 $temp = $num ;
 $flag=0;

 for($i=0;$i<$num ;$i++){
    if($i>0  && $i<$num -1  ){
        echo "*&nbsp";
        for($k=1     ;$k<$i;$k++){
            echo "&nbsp&nbsp&nbsp&nbsp" ;
        }
        echo "&nbsp*&nbsp";
        echo "<br>";
    }
    else{
    for($j=0;$j<$i + 1;$j++){
        echo "*&nbsp&nbsp";
    }
    echo "<br>";
   
}
 }

?>

<hr>
<?php

  $temp = $num;
  $flag=0;
  for($i=0;$i<$num  ;$i++){
     for($s=$temp;$s>0;$s--){
        echo "&nbsp&nbsp";
     }
     $temp--;
     if($i>0 && $i<$num - 1){
        echo "*";
        for($j=1;$j<=$i;$j++){
            echo "&nbsp&nbsp";
        }
        
        for($n=0;$n<$i -1;$n++){
            echo "&nbsp&nbsp";
        }
        echo "*";
        echo "<br>";
     }
     else{
        for($m=0;$m<$i + 1;$m++){
            echo "*&nbsp&nbsp";
        }
        echo "<br>";
     }
  }

?>


<hr>
<?php
for($i=0;$i<$num ;$i++)
{
   
        for($k=0 ;$k<$num;$k++)
        {
            if ($i==$k||$k==0||$i==$num-1)
             {
                echo "*";
             }
           else
            {
            echo " &nbsp;";
           }
        
        
    }
    echo "<br>";
   
}
 