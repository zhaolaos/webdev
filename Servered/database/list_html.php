<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>员工信息表</title>
    <script type="text/javascript">
        function confirmDel(id) {
            if(window.confirm("你确认要删除吗？"))
            {
            //跳转到empdelete.php文件
            location.href = "empdelete.php?id="+id;
            }
        }
    </script>
</head>
<body>
    <div align="center">
        <h3>员工信息表</h3>
        <form action="./showlist.php" method="get">
            按照姓名查询：<input type="text" name="keyword">
            <input type="submit" value="搜索">
        </form>
        <hr>
        <p><a href="./empadd.php">添加员工</a></p>
        <table border="1">
            <tr style="background-color:#999">
                <th>ID</th>
                <th>姓名</th>
                <th>
                    <a href="./showlist.php?order=e_dept&sort=<?php
echo ($order == 'e_dept') ? $sort : 'desc'; ?>">所在部门</a>
                </th>
                <th>出生日期</th>
                <th>
                    <a href="./showlist.php?order=date_of_entry&sort=<?php
echo ($order == 'date_of_entry') ? $sort : 'desc'; ?>">入职日期</a>
                </th>
                <th>操作</th>
            </tr>
            <?php
if (!empty($emp_info)) {
    foreach ($emp_info as $row) {
        ?>
            <tr>
                <td><?php echo $row['e_id']; ?></td>
                <td><?php echo $row['e_name']; ?></td>
                <td><?php echo $row['e_dept']; ?></td>
                <td><?php echo $row['date_of_birth']; ?></td>
                <td><?php echo $row['date_of_entry']; ?></td>
                <td>
                    <span></span>
                    <a href="./empupdate.php?id=<?php echo $row['e_id']; ?>">编辑</a> &nbsp;
                    <span></span>
                    <a href="javascript:void(0)" onclick="confirmDel(<?php echo $row['e_id']; ?>)">删除</a>
                </td>
            </tr>
            <?php
}
} else {
    echo '<tr><td colspan="6">暂无员工数据</td></tr>';
}
?>
        </table>
        <p><?php echo $page_html; ?></p>
    </div>
</body>
</html>