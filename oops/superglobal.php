<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    //   $cookie_n="amazon";
    //   $cookie_v="Hi my name is harvinder singh";
    //   setcookie("$cookie_n","$cookie_v",time()+1212,"/");
    //   session_start();
    //   print_r($_SESSION)
      
    <form action="demosuper.php" method="POST" enctype="multipart/form-data">
        Name   <input type="text" name="user">
        <br>
        password<input type="password" name="pass">
        <br>
        upload here<input type='file' name='upload'>
        <br>
        <input type="submit" name="login" value="Log in ">
        <?php
           print_r($_FILES['upload']);
           if(isset($_FILES['upload'])){
            print_r($_FILES);
           } 
           
        ?>
    </form>
</body>
</html>