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
$data = array("joe@host.com", "john.doe@gh.co.uk", "asmithsonian@us.info", "jay@zoo.tw");
usort($data, 'sortByLen');
print_r($data); 

function sortByLen($a, $b) {
if (strlen($a) == strlen($b)) {
return 0;
} else {
return (strlen($a) > strlen($b)) ? 1 : -1;
}
}
?>





 </body>
</html>
