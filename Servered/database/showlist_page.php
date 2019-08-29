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
// 设置变量$page_size保存每页显示的记录条数
$page_size = 2;
// 设置变量$page保存用户当前访问的页码，默认是1
$page = 1;

// 查询所有记录条数
$res   = mysqli_query($conn, "select count(*) from emp_info");
$count = mysqli_fetch_row($res);
// 取出查询结果第一列的值
$count = $count[0];
// 计算最大页码值
$max_page = ceil($count / $page_size);
// 获取当前访问的页码，并做容错处理
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$page = $page > $max_page ? $max_page : $page;
$page = $page < 1 ? 1 : $page;

// 组合分页链接
$page_html = "<a href='./showlist_page.php?page=1'>首页</a>&nbsp;";
$page_html .= "<a href='./showlist_page.php?page=" . (($page - 1) > 0 ? ($page - 1) : 1) . "'>上一页</a>&nbsp;";
$page_html .= "<a href='./showlist_page.php?page=" . (($page + 1) < $max_page ? ($page + 1) : $max_page) . "'>下一页</a>&nbsp;";
$page_html .= "<a href='./showlist_page.php?page={$max_page}'>尾页</a>";
$lim = ($page - 1) * $page_size;
// 查询数据SQL语句
$sql = "SELECT * FROM emp_info LIMIT $lim,$page_size";
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
