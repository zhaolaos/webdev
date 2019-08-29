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
$data = array(array("id" => 1, "name" => "Boney M", "rating" => 3),
array("id" => 2, "name" => "Take That", "rating" => 1),
array("id" => 3, "name" => "The Killers", "rating" => 4),
array("id" => 4, "name" => "Lusain", "rating" => 3),
); 
foreach ($data as $key => $value) 
{
	$name[$key] = $value['name'];
	$rating[$key] = $value['rating'];
}
array_multisort($rating, $name, $data); 
print_r($data);
?>





 </body>
</html>
