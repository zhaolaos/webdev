<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP查看服务器信息</title>
</head>
<body>
	<table>
		<caption>当前服务器信息</caption>
		<tr>
			<td>当前PHP版本</td>
			<td><?php echo PHP_VERSION; ?></td>
		</tr>
		<tr>
			<td>操作系统类型</td>
			<td><?php echo PHP_OS; ?></td>
		</tr>
		<tr>
			<td>服务器时间</td>
			<td><?php echo date('Y-m-d H:i:s'); ?></td>
		</tr>
	</table>
</body>
</html>
