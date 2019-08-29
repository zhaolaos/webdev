<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  
<?php
function local(){
$a = 10;        //在函数内部声明一个变量a并赋值
echo "函数内部变量a的值为".$a."<br>";
}
local();       //调用函数local()，用来打印出变量a的值
$a = 20;     //在函数外部再次声明变量a并赋另一个值
echo "函数外部变量a的值为".$a;
?>



 </body>
</html>