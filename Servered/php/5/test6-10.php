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

$dir ="PHP/";

if(is_dir($dir))

if(rmdir($dir))
  echo "删除成功";
  else
  echo "删除失败";

?>










 </body>
</html>
