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
$a=0;
$b=null;
$c=13.5;
echo empty($a)?"空":"非空";
echo empty($b)?"空":"非空";
echo empty($c)?"空":"非空";
echo gettype($a);
echo intval($c);
echo var_dump(is_array($a));
echo  var_dump(is_float($c));
echo  var_dump(is_double($c));
echo  var_dump(is_int($a));
echo  var_dump(is_integer($a));
echo var_dump(is_long($a));
echo var_dump(is_object($a));
echo var_dump(is_real($a));
echo var_dump(isset($d));
echo gettype(strval($c));
unset($a);
echo var_dump(isset($a));
?>



 </body>
</html>
