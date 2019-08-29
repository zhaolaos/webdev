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
 <form method="post" action="">
 请输入学生成绩:
 <input type="text" name="score">
 <input type="submit" value="判断">
 </form>


<?php
$score=$_POST["score"];
if($score>=90)
{
echo "优秀！";
}
else if($score>=80){
echo "良好！";
}
else if($score>=60){
echo "及格！";
}
else
echo "不及格";
?>

 </body>
</html>
