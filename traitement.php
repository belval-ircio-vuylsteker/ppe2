<?php
    
   define('LOGIN','test');
   define('PASSWORD','test');
   
   if($_POST['login']!=LOGIN)
   {
       echo"Mauvais login";
   }
   
   else if($_POST['password']!=PASSWORD)
   {
       echo"Mauvais mot de passe";
   }
   
   else
   {
       session_start();
       $_SESSION['login']=LOGIN;
   }

?>

