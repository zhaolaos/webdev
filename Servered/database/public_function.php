<?php

/**
 * 初始化数据库链接
 * @return mixed 返回数据库连接
 */
function dbInit()
{
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
    } else {
        // 设置字符集,如果数据库默认是utf8字符集，此句可忽略
        mysqli_query($conn, 'set names utf8');
        return $conn;
    }

}

/**
 * 执行SQL的函数
 * @param  string $sql 待执行的SQL语句
 * @return mixed      失败返回false，成功时，如果是查询语句返回结果集，否则返回true
 */
function query($conn, $sql)
{
    if ($result = mysqli_query($conn, $sql)) {
        // 执行成功
        return $result;
    } else {
        // 执行失败
        echo ('SQL执行失败<br>');
        echo ('错误的SQL为' . $sql . '<br>');
        echo ('错误的代码为' . mysqli_errno() . '<br>');
        echo ('错误的信息为' . mysqli_error() . '<br>');
        die;
    }
}

/**
 * 处理结果集中有多条数据的函数
 * @param  string $sql 待执行的SQL语句
 * @return array      返回遍历结果集后的二维数组
 */
function fetchAll($conn, $sql)
{
    if ($result = mysqli_query($conn, $sql)) {
        // 执行成功
        // 遍历结果
        $rows = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $row;
        }
        // 释放结果集资源
        mysqli_free_result($result);
        return $rows;
    } else {
        // 执行失败
        return false;
    }
}

/**
 * 处理结果集中只有一条数据的函数
 * @param  string $sql 待执行的SQL语句
 * @return array      返回遍历结果集后的一维数组
 */
function fetchRow($conn, $sql)
{
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
    } else {
        return false;
    }
}

/**
 * 对数据进行安全处理
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
function safeHandle($data)
{
    $data = htmlspecialchars($data);
    return $data;
}
