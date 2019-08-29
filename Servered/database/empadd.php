<?php
// 声明HTTP消息头的文档编码格式
header('content-type:text/html;charset=utf-8');
// 引入公共函数文件
require "./public_function.php";
// 初始化数据库
$conn = dbInit();
if (!empty($_POST)) {
    $fields = array('e_name', 'e_dept', 'date_of_birth', 'date_of_entry');
    $values = array();
    foreach ($fields as $key => $value) {
        $data = isset($_POST[$value]) ? $_POST[$value] : '';
        if ($data == '') {
            die($value . '字段不能为空');
        }
        $data = safeHandle($data);
        // $fields[$key] = "`$value`";
        $values[] = "'$data'";
    }
    $fields = implode(',', $fields);
    $values = implode(',', $values);
    $sql    = "insert into emp_info ($fields) values ($values)";
    if ($res = query($conn, $sql)) {
        header('Location: ./showlist_new.php');
        die;
    } else {
        die('员工添加失败');
    }
}
// 没有表单提交时，显示员工添加页面
require './add_html.php';
