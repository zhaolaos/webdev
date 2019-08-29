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
$dir = "c:/wamp/www";
if(is_dir($dir)) //is_dir 函数判断路径的有效性，其语法如下：bool is_dir(string path)
{$dir_res = opendir($dir);
echo "目录存在";
}

else
echo "目录不存在或者不是一个有效的目录";
?>











 </body>
</html>
