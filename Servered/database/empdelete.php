<?php
// 声明HTTP消息头的文档编码格式
header('content-type:text/html;charset=utf-8');
// 引入公共函数文件
require "./public_function.php";
// 初始化数据库
$conn = dbInit();
// 获取要删除的员工id
$e_id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
$sql  = "delete from emp_info where e_id=$e_id";
if (query($conn, $sql)) {
    // 提示删除成功，并跳转
    echo '<script type="text/javascript">alert("删除成功");location.href="./showlist_new.php";</script>';
    // header('Location: ./showlist_new.php');
    die;
}
