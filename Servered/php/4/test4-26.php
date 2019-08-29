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
$student=array(
"张三"=>array("性别"=>"男","年龄"=>18,"地址"=>"海口"),
"李四"=>array("性别"=>"女","年龄"=>19,"地址"=>"山西"),
"王五"=>array("性别"=>"男","年龄"=>17,"地址"=>"湖北")
);
echo $student["张三"]["性别"];
?>

 </body>
</html>
