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
 $a=file($filename);
 foreach($a as $num=> $value)
  echo $num."=>".$value."<br>";  
}
else 
echo "该文件不存在";
?>










 </body>
</html>
