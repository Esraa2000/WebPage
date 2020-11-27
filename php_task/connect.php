
<?php


$servername = 'localhost' ; // اكتب اسم السرفر 
$userdb = 'root'   ;        // اكتب اسم المستخدم لقاعدة البيانات
$dbpass = 'root'   ;         // اكتب اسم الباسورد الخاص بيوزر القاعدة
$dbname='data'   ; //اكتب اسم قاعدة البيانات

$condb = mysql_connect($servername,$userdb,$dbpass) or die ('خطا في الاتصال بالقاعدة');
mysql_select_db($dbname,$condb) or die ('يرجي كتابة اسم القاعدة بشكل صحيح');
?>

