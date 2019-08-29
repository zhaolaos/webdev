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
function add()
{
static $a = 10;
$a++;
echo $a."<br >";
}
add ();
add ();
add ();
?>



 </body>
</html>