<?php
// 声明HTTP消息头的文档编码格式
header('content-type:text/html;charset=utf-8');
// 引入公共函数文件
require "./public_function.php";
// 初始化数据库
$conn = dbInit();
// 获取要编辑的员工id
$e_id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
// 判断是否有数据提交
if (!empty($_POST)) {
    $fields = array('e_name', 'e_dept', 'date_of_birth', 'date_of_entry');
    // 定义变量，用来保存处理后的员工数据
    $values = array();
    // 遍历$_POST，获取更新员工数据的键和值
    foreach ($fields as $key => $value) {
        $data = isset($_POST[$value]) ? $_POST[$value] : '';
        if ($data == '') {
            die($value . '字段不能为空');
        }
        // 值就是该字段保存的数据，对其进行安全处理
        $data = safeHandle($data);
        // 把键和值按照更新SQL语句的要求连接
        $values[] = "$value='$data'";
    }
    // 把$values数组的数据拼接成使用","连接的字符串，并赋值给$values_str
    $values_str = implode(',', $values);
    $sql        = "update emp_info set $values_str where e_id=$e_id";
    if ($res = query($conn, $sql)) {
        header('Location: ./showlist_new.php');
        die;
    } else {
        die('员工信息更新失败');
    }
} else {
    // 当没有表单数据提交时，查询到当前要编辑的员工信息，展示到update_html.php页面中
    // 编写SQL语句
    $sql = "select * from emp_info where e_id=$e_id";
    // 执行查询
    $row = fetchRow($conn, $sql);
    // 没有表单提交时，显示员工修改页面
    require './update_html.php';
}
