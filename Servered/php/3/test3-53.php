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
$trape1="";
$trape2="";
for($i=5;$i>0;$i--)
{  for($j=$i;$j>0;$j--)
    $trape1.="&nbsp&nbsp";
  for($k=(10-$i)*2;$k>=0;$k--)

  {
    if($k==10-$i)
	  {$trape2=$trape2."$&nbsp";
        continue;}
    $trape2.="*&nbsp";
  }
  $trape=$trape1.$trape2;
  echo $trape."<br>";
  $trape="";
  $trape1="";
  $trape2="";
}
?> 






 </body>
</html>
