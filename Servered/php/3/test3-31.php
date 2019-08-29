<html>
<head>
<meta charset="UTF-8">
</head>
<body>


<?php
$var = "教师";
echo "我是$var"."<br>";
echo '我是$var'.'<br>';
echo <<<begin
大家好
我是一个{$var}
begin;
?>




</body>
</html>
