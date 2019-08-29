<?php
// 声明HTTP消息头的文档编码格式
header('content-type:text/html;charset=utf-8');
// 引入公共函数文件
require "./public_function.php";
// 初始化数据库
$conn = dbInit();
// 查询数据SQL语句
$sql = 'SELECT * FROM emp_info ';
// 定义员工数组，用以保存员工信息
$emp_info = fetchAll($conn, $sql);
// 加载视图模板文件
require './list_html.php';
