<?php
ob_start();
@session_start();
?>
<html>
   <head>
    
   </head>
   <body style="background-color:grey;">

<?php
if($_GET['id']==1){
    
    echo'   
     <br />
     <br />
    
     <table align="center" width="30%" style="background: white;" >
    <tr>
    <td align="center" >   <img src="check-64.gif" /> </td>
    </tr>
       <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > Membership has been successfully registered   </td>
    </tr>
         <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > now you can login   </td>
    </tr>
       
    <td align="center"><img src="ajax-loader22.gif" /> </td>
    </tr>
    
    
    
    </table>';
     echo "<meta http-equiv='Refresh' content='2; url=index.php' />
     <br />
     <br />
      <br />
     <br />
      <br />
     <br />
      <br />
     <br />
     
     
      ";
     
     
    
}if($_GET['id']==2){
    
    echo'   
     <br />
     <br />
    
     <table align="center" width="30%" style="background: white;" >
    <tr>
    <td align="center" >   <img src="check-64.gif" /> </td>
    </tr>
       <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > login has been successfully    </td>
    </tr>
         <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > you are welcome   </td>
    </tr>
       
    <td align="center"><img src="ajax-loader22.gif" /> </td>
    </tr>
    
    
    
    </table>';
     echo "<meta http-equiv='Refresh' content='2; url=afterlogin.php' />
     <br />
     <br />
      <br />
     <br />
      <br />
     <br />
      <br />
     <br />
     
     
      ";
     
     
    
}else if($_GET['id']==3){
    
    echo'   
     <br />
     <br />
    
     <table align="center" width="30%" style="background: white;" >
    <tr>
    <td align="center" >   <img src="delete_2.gif" /> </td>
    </tr>
       <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > ERROR : username or password wrong   </td>
    </tr>
         <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " >please try again   </td>
    </tr>
       
    <td align="center"><img src="ajax-loader22.gif" /> </td>
    </tr>
    
    
    
    </table>';
     echo "<meta http-equiv='Refresh' content='2; url=index.php' />
     <br />
     <br />
      <br />
     <br />
      <br />
     <br />
      <br />
     <br />
     
     
      ";
     
     
    
}if($_GET['id']==4){
    
    echo'   
     <br />
     <br />
    
     <table align="center" width="30%" style="background: white;" >
    <tr>
    <td align="center" >   <img src="check-64.gif" /> </td>
    </tr>
       <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > logout has been successfully    </td>
    </tr>
         <tr>
          <tr>
    <td align="center" style=" font-size: 20; font-weight: bold; " > thank you  </td>
    </tr>
       
    <td align="center"><img src="ajax-loader22.gif" /> </td>
    </tr>
    
    
    
    </table>';
     echo "<meta http-equiv='Refresh' content='2; url=index.php' />
     <br />
     <br />
      <br />
     <br />
      <br />
     <br />
      <br />
     <br />
     
     
      ";
     
     
    
}









?>










