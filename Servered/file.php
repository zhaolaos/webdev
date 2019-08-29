<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>获取文件后缀</title>
</head>
<body>
	<h3>获取文件后缀</h3>
	<form action="" method="post">
		<input type="file" name="path">
		<input type="submit" name="submit" value="获取">
	</form>
</body>
</html>
<?php
/**
 * 知识点查阅
 * require、require_once、include、include_once的区别
 */
require "getfileext.php"; // 导入获取扩展名函数的文件，url路径格式
if (isset($_POST["path"])) {
    // 获得提交的文件信息
    $path = trim($_POST["path"]);
    // 通过getFileExt函数获取文件后缀
    $ext = getFileExt($path);
    // 输出结果
    echo "<p>文件路径： {$path} </p>";
    echo "<p>文件后缀： {$ext} </p>";
}
?>
