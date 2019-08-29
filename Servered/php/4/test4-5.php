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
function exam(&$var1){ 
$var1++; 
echo "In Exam:" . $var1 . "<br />"; 
} 
$var1 = 1; 
echo  $var1 . "<br />"; 
exam($var1); 
echo  $var1 . "<br />"; 
?>



 </body>
</html>
