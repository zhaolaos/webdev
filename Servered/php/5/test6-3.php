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
$path="c:/wamp/www/test6-1.php";

$a=pathinfo($path);

print_r($a);
echo "<br>";

echo "目录名：".$a['dirname']."<br>";

echo "扩展名：".$a['extension']."<br>";

echo "带扩展名的文件名：".$a['basename']."<br>";
echo "不带扩展名的文件名：".$a['filename']."<br>";


?>










 </body>
</html>
