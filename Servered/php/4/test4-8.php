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
foreach($test as $key=>$value)
  echo "第".$key."个参数是".$value."<br>";
}

get("菲菲",3,"海南","唱歌跳舞");
?>




 </body>
</html>
