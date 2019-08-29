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
$starttime=microtime();
for($i=1;$i<20;$i++)

echo "$i=".$i."<br>";

$endtime=microtime();

echo "执行时间".($endtime-$starttime);




?>
 </body>
</html>
