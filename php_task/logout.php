<?php

ob_start();

session_start();
$userssesion=$_SESSION['username'];
$userpasssseion=$_SESSION['password'] ;

if (isset($_SESSION['username']) and isset($_SESSION['password'])){

   session_destroy();
   
  
            die( "
    <meta http-equiv='Refresh' content='0; url=box.php?id=4' />  ");



    

}




ob_end_flush();



?>