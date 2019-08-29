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

function bookRemove(&$array,$offset,$length=1)
{
return array_splice($array,$offset,$length);
}
$booklist=array("PHP",4=>"ASP","JSP","名著1"=>"西游记","名著2"=>"水浒传","小说"=>"人生若只如初见");
echo "删除前的元素";
echo "<br>";
print_r($booklist);
echo "<br>";
echo "删除后的元素";
echo "<br>";
bookRemove($booklist,1,3);
print_r($booklist);
?>


 </body>
</html>
