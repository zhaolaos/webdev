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
define("PI",3.14);
function get_circle_area($radius){
	$area=PI*$radius*$radius;  
	return $area;}
for($r=3;$r<=8;$r++){ 
	$s=get_circle_area($r); 
	echo"r=$r,area=$s";  
	echo"<br/>";  
	echo"<br/>";}	
		?>



 </body>
</html>
