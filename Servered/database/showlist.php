<?php
// 声明HTTP消息头的文档编码格式
header('content-type:text/html;charset=utf-8');

// 初始化数据库连接参数
// 数据库服务器名称、用户名、密码、数据库名需要根据自己搭建实际情况设定
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "employee";

// 连接数据库
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 判断数据库连接是否成功，如果不成功显示错误信息
if (!$conn) {
    die('数据库连接失败！' . mysqli_connect_error);
}

// 设置字符集,如果数据库默认是utf8字符集，此句可忽略
mysqli_query($conn, 'set names utf8');

// 实现员工排序的功能
// 定义合法的排序字段，通过部门或入职时间排序
$fields = array('e_dept', 'date_of_entry');
// 初始化排序语句，用来组合排序的order子句
$sql_order = '';
/**
 * 通过isset()函数来判断获取URL中order和sort参数的值是否存在
 * 存在则返回值
 * 不存在则返回空字符串
 */
$order = isset($_GET['order']) ? $_GET['order'] : '';
$sort  = isset($_GET['sort']) ? trim($_GET['sort']) : '';
if (in_array($order, $fields)) {
    if ($sort == 'desc') {
        $sql_order = "ORDER BY $order desc";
        $sort      = 'asc';
    } else {
        $sql_order = "ORDER BY $order asc";
        $sort      = 'desc';
    }
}

// 员工信息搜索功能
$where = '';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $where   = "WHERE e_name LIKE '%$keyword%'";
}

// 实现分页功能代码
// 设置变量$num保存每页显示的记录条数
$num = 2;
// 设置变量$page保存用户当前访问的页码，默认是1
$page = 1;
$lim  = ($page - 1) * $num;

// 查询数据SQL语句
$sql = 'SELECT * FROM emp_info ' . $where . $sql_order;
// 执行查询返回结果集
$result = mysqli_query($conn, $sql);

// 定义员工数组，用以保存员工信息
$emp_info = array();
// 遍历结果集，获取每位员工的详细信息
while ($row = mysqli_fetch_assoc($result)) {
    $emp_info[] = $row;
}

// 加载视图模板文件
require './list_html.php';
