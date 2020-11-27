<?php

ob_start();
session_start();
$userssesion=$_SESSION['username'];
$userpasssseion=$_SESSION['password'] ;
?>
<html>
   <head>
    
   </head>
   <body style="background-color:grey;">


<?php
if (isset($userssesion) AND isset($userpasssseion)){
    echo '
       <br />
     <br />
    
     <table align="center" width="30%" style="background: white;" >

       <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold;color:black; " > welcome  '.$userssesion.'  </td>
    </tr>
        

         <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > <a href="logout.php" style="color:red;"> logout <img src="logout.png" height="20" /> </a>  </td>
    </tr>
    
    
    </table>';
    
} 
?>
