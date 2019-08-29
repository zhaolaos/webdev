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
$arr = array("one", "two", "three"); 
//reset ($arr); 
//while (list(, $value) = each ($arr)) { 
//echo "Value: $value<br>\n"; 
//} 
foreach ($arr as $value) { 
echo "数组的元素值为: $value<br>\n"; 
} 
?> 

 </body>
</html>
