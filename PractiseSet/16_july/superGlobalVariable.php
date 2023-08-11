<?php
   $harvinder="singh";
//    $_SERVER['hello']='toh kaise h aap sab';
//    echo $GLOBALS['harvinder'];
 if(isset($_GET['submit'])){
    header('location:testing.php');
 }
?>
<html>
 <head></head>
 <body>
 <form method='get' action='testing.php' >
 <input type='text' name='harvind'>
 <button type='sumbit' name='submit'>submit</button>
</form>
 </body>
</html>
