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
$filename="2.txt";
if(file_exists($filename))
{
 $a=file_get_contents($filename);
 echo $a;
}
else 
echo "该文件不存在";
?>










 </body>
</html>
