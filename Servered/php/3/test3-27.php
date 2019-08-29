<html>
<head>
<meta charset="UTF-8">
</head>
<body>


<?php
class magic{
function showMagic(){

echo "当前行号为".__LINE__."<br>";
echo "当前文件所在路径".__FILE__."<br>";
echo "当前函数名称".__FUNCTION__."<br>";
echo "类名为".__CLASS__."<br>";
echo "方法名为".__METHOD__."<br>";
echo "目录名为".__DIR__."<br>";
echo "命名空间为".__NAMESPACE__."<br>";

}

}

$test=new magic();
$test->showMagic();




?>

</body>
</html>
