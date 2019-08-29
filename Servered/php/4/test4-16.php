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

echo date("M d Y H:i:s",mktime(0,0,0,1,1,2015));
echo "<br>";
echo gmdate("M d Y H:i:s",mktime(0,0,0,1,1,2015));

?>
 </body>
</html>
