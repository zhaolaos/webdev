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
$data = array("book-1", "book-10", "book-100", "book-5");
natsort($data);

print_r($data);
echo "<br>";
$data1=array_reverse($data);

print_r($data1);
?>





 </body>
</html>
