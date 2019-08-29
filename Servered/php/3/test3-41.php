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
$season="秋天";
switch($season){
case  "春天":
$dress="风衣";
break;
case  "夏天":
$dress="裙子";
break;
case  "秋天":
$dress="大衣";
break;
case  "冬天":
$dress="棉衣";
break;
}
echo "当前季节为".$season."您可以穿".$dress;
?>


 </body>
</html>
