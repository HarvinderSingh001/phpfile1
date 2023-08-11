<?php
 function divideNumbers($numerator , $denominator){
    try{
    
        if($denominator==0){
            throw new Error("denominator is  0 so result is  infinity");
        }
        
        else{
            echo "Result  is ".($numerator/$denominator);
            echo "<br>";
        }
        
    }
    catch(Error $e){
        echo "Error occurred";
        echo $e->getmessage();
    }
    finally{
       echo "It is the end of division attempt";
    }
 }
//  divideNumbers(2,0);
    // divideNumbers(2,2);
    // divideNumbers(0,4);
    divideNumbers(1.5,2);


 

?>