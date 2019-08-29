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
date_default_timezone_set('Asia/Shanghai');
$a=getdate();
print_r($a);
echo "<br>";
echo "当前小时：";
echo $a["hours"]."<br>";
echo "当前分钟：";
echo $a["minutes"]."<br>";
echo "当前秒：";
echo $a["seconds"]."<br>";
echo "当前年：";
echo $a["year"]."<br>";
echo "当前月：";
echo $a["mon"]."<br>";
echo "当前日：";
echo $a["mday"]."<br>";
echo "当前星期用数字表示：";
echo $a["wday"]."<br>";
echo "当前一年中第几天：";
echo $a["yday"]."<br>";
echo "当前星期英文表示：";
echo $a["weekday"]."<br>";
echo "当前月用英文表示：";
echo $a["month"]."<br>";
echo "当前离UNIX的秒数：";
echo $a[0]."<br>";
?>
 </body>
</html>
