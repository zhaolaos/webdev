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
//年月日的表示：
echo date("o,m,d")."<BR>";
echo date("y,m,d")."<BR>";
echo date("Y,m,d")."<BR>";
echo date("Y,M,d")."<BR>";
echo date("Y,M,D")."<BR>";
echo date("Y,F,D")."<BR>";
echo date("Y,F,l")."<BR>";
//小时分钟秒的表示
echo date("g:i:s")."<BR>";
echo date("G:i:s")."<BR>";
echo date("H:i:s")."<BR>";
echo date("h:i:s")."<BR>";
?>
 </body>
</html>
