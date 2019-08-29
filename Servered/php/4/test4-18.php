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
for($i=1;$i<10;$i++)
echo "\$i=".$i."<br>";
$endtime=microtime();
echo "执行时间".($endtime-$starttime);
echo "<br>";
echo microtime(true);
echo "<br>";
echo microtime(false);
echo "<br>";
echo microtime();



?>
 </body>
</html>
