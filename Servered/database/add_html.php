<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加员工</title>
</head>
<body>
	<div align="center">
		<h3>添加员工</h3>
		<form action="./empadd.php" method="post">
			<p><label>姓名：</label><input type="text" name="e_name"></p>
			<p><label>所属部门:</label><input type="text" name="e_dept"></p>
			<p><label>出生日期：</label><input type="text" name="date_of_birth"></p>
			<p><label>入职日期：</label><input type="text" name="date_of_entry"></p>
			<input type="submit" value="保存">
			<input type="reset" value="重新填写">
		</form>
	</div>
</body>
</html>
