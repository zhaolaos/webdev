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
sort($data);
print_r($data);
echo "<br>";
natsort($data);

print_r($data);

?>





 </body>
</html>
