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
$file=fopen("yey/conn.php","r");

echo fgetc($file);
//echo fgetc($file);
//echo fgetc($file);
$file=fopen("yey/conn.php","r+");

echo fgetc($file);

//$file=fopen("http://www.qttc.edu.cn","r");
?>











 </body>
</html>
