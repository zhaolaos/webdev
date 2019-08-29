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

for($i=20;$i<=40;$i++)
{
	if($i%9==0)

		{
		 echo $i."是9的倍数<br>";
	     continue;

		}
	echo $i."不是9的倍数<br>";
	
}
?>


 </body>
</html>
