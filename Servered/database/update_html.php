<div align="center">
	<h3>修改员工信息</h3>
	<form method="post">
		<p>
			<label>姓名：</label>
			<input type="text" name="e_name" value="<?php echo $row['e_name']; ?>">
		</p>
		<p>
			<label>所属部门:</label>
			<input type="text" name="e_dept" value="<?php echo $row['e_dept']; ?>">
		</p>
		<p>
			<label>出生日期：</label>
			<input type="text" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>">
		</p>
		<p>
			<label>入职日期：</label>
			<input type="text" name="date_of_entry" value="<?php echo $row['date_of_entry']; ?>">
		</p>
		<input type="submit" value="保存">
		<input type="reset" value="重新填写">
	</form>
</div>