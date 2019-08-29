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
//定义循环的数组 
$arr = array('PHP','JSP','ASP'); 
while(list($k,$v) = each($arr)){ 
echo $k.'=>'.$v.'<br />'; 
} 
?>




 </body>
</html>
