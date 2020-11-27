<?php
ob_start();
session_start();

?>

<html>
    
   </head>
   
    <link href="style.css" rel="stylesheet" type="text/css"/>
   <body style="background-color:grey;">
   <head>

<?php
include "connect.php";






if (isset($_POST['add']) and $_POST['add']=='user'){
    
    $username = $_POST['username'];
$password = $_POST['password'];
$email=$_POST['email'];

$insertuser=mysql_query("INSERT INTO users (username,password,email) VALUES('$username','$password','$email')") or die ("mysql error");
    
    if (isset($insertuser)){
        
        die("<meta http-equiv='Refresh' content='0; url=box.php?id=1' />");
        
    }
    
    
    }






if (isset($_POST['login']) and $_POST['login']=='user'){
 $username = $_POST['username'];
 $password = $_POST['password'];



  $data = mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'") 
  or die("mysql error");
  



  if (mysql_num_rows($data)!= 0){
   
    while ($row=mysql_fetch_assoc($data)){
        $uname= $row['username'];
        $upass =$row['password'];
        
    }
    
  } if ($username == $uname and $password == $upass){
    
    $_SESSION['username'] = $uname;
    $_SESSION['password'] = $upass;
    
    if (empty($username) or empty($password)){
        
         die( "
    <meta http-equiv='Refresh' content='0; url=box.php?id=3' />  ");
        
    }
    
    
    
    
      echo '
   <div style="width: 20%;  background: gray; margin: auto; background: white;" >
   
   
  
</div>';
                                                        die( "
    <meta http-equiv='Refresh' content='0; url=box.php?id=2' />  ");
                            
                            
          
  } else {
   die( "
    <meta http-equiv='Refresh' content='0; url=box.php?id=3' />  ");
  }
    










  
    
    
}



?>

<br />
<br />
<div style="width: 60%;  background: gray; margin: auto; " >

<div style="width: 40%; float: right; background: white;">

<form action="index.php" method="post">
<table align="center" width="100%">
<tr>
<td align="center" colspan="2" style="padding: 5px; font-size: large;" width="100%"> login in</td>

</tr>
<tr>
<td align="center"   style="padding: 5px; font-size: large; background:  rgb(38, 124, 220);  " > username</td>
<td align="center" style="padding: 5px; font-size: large;"> <input type="text" name="username"  /></td>
</tr>

<tr>
<td align="center" style="padding: 5px; font-size: large; background:  rgb(38, 124, 220); " > passowrd</td>
<td align="center" style="padding: 5px; font-size: large;"> <input type="password" name="password"  /></td>
</tr>





<tr>
<td colspan="2" align="center">  
  <input type="submit" value="login"  style="background:  rgb(38, 124, 220); width: 20%; padding: 5px; color: white; font: bold;"/>
        </td>
</tr>
 <input type="hidden" name="login" value="user"/>
</form>
</table>

</div>



<div style="width: 40%; float: left; background: white;">
<form action="index.php" method="post">
<table align="center" width="100%">
<tr>
<td align="center" colspan="2" style="padding: 5px; font-size: large;" width="100%"> registration</td>

</tr>
<tr>
<td align="center" width="30%"  style="padding: 5px; font-size: large; background:  rgb(38, 124, 220);  " > username</td>
<td align="center" style="padding: 5px; font-size: large;" width="70%"> <input type="text" name="username" size="30" /></td>
</tr>


<tr>
<td align="center" width="30%"  style="padding: 5px; font-size: large; background:  rgb(38, 124, 220); " > email</td>
<td align="center" style="padding: 5px; font-size: large;" width="70%"> <input type="text" name="email"  size="30"/></td>
</tr>


<tr>
<td align="center" width="30%"  style="padding: 5px; font-size: large; background:  rgb(38, 124, 220); " > password</td>
<td align="center" style="padding: 5px; font-size: large;" width="70%"> <input type="password" name="password"  size="30"/></td>
</tr>

<tr>
<td colspan="2" align="center">  
  <input type="submit" value="register"  style="background:  rgb(38, 124, 220); width: 20%; padding: 5px; color: white; font: bold;"/>
        </td>
</tr>


</table>
 <input type="hidden" name="add" value="user"/>
</form>
</div>
</div>

<br />
<br />
<div style="clear: both; margin-top: 150px; margin-right: auto; margin-left:auto ; width: 40%;" align="center">
  
 <a href="contact.php">  <input type="submit" value="contact us"  style="background:  rgb(38, 124, 220); width: 20%; padding: 5px; color: white; font: bold;" size="20"/> </a> 
    
  
</div>


   </body>
</html>