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
function power($number,$n){
$pow=1;
for($i=1;$i<=$n;$i++)
 $pow=$pow*$number;
return $pow;
}
echo "4的3次方：",power(4,3);
?>



 </body>
</html>
