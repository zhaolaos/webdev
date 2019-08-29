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
function get(){

$total=func_num_args();
echo "参数总数为".$total."<br>";

$test=func_get_args();
for($i=0;$i<$total;$i++)
echo "第".($i+1)."个参数是".$test[$i]."<br>";



}

get("菲菲",3,"海南","唱歌跳舞");









?>




 </body>
</html>
