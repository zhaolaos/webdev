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
$tar = array ( 
1 => '东', 
2 => '西', 
3 => '南', 
4 => '北', 
5 => '东南', 
6 => '西南', 
7 => '东北', 
8 => '西北', 
9 => '南北', 
10 => '东西', 
); 
$TM = '西'; 
echo '<br />'; 
for( $i=1;$i<=count( $tar ) ;$i++ ) 
{ 
if( $tar[$i] == $TM ) 
{ 
echo $tar[$i].'-'.$i.'<br />'; 
break; 
} 
} 


?>


 </body>
</html>
