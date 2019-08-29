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
$booklist[]="PHP";
$booklist[4]="ASP";
$booklist[]="JSP";
$booklist["名著"]="西游记";
$booklist["名著"]="水浒传";
$booklist["小说"]="人生若只如初见";
print_r($booklist);
echo "<br>";
echo $booklist["名著"]."<br>";
echo $booklist[5];


?>

 </body>
</html>
