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
$a = 10;                   //在外部定义一个变量a
function local(){
global $a;                 //将变量a声明为全局变量
echo "在local函数内部获得变量a的值为".$a."<br>";
}
local();                   //调用函数local()，用于输出local函数内部变量a的值
?>



 </body>
</html>