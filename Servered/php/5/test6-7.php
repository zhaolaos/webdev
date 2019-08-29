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
$dir = "c:/wamp/www/yey";
$dir_res = opendir($dir);
while(false!=($filen = readdir($dir_res )))
{ echo $filen."<br>";
}

closedir($dir_res);
?>











 </body>
</html>
