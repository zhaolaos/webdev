<?php
// header函数为浏览器指定文件的字符集
header('Content-type:text/html;charset=utf-8');
// 定义数组，存储订货单中商品信息
$goods = array(
    array('name' => '主板', 'price' => '379', 'producing' => '广东', 'num' => 3),
    array('name' => '显卡', 'price' => '799', 'producing' => '上海', 'num' => 2),
    array('name' => '硬盘', 'price' => '589', 'producing' => '北京', 'num' => 5),
);
// 初始化商品总价变量
$total = 0;
$str   = "<table border='1'>";
$str .= "<caption>商品订货单</caption>";
$str .= "<tr><th>商品名称</th><th>价格(元)</th><th>产地</th><th>数量(件)</th><th>总价(元)</th></tr>";
// 循环输出商品信息
foreach ($goods as $key => $values) {
    $str .= "<tr align='center'>";
    foreach ($values as $v) {
        $str .= "<td>" . $v . "</td>";
    }
    $sum = $values['price'] * $values['num'];
    $str .= "<td>" . $sum . "</td>";
    $str .= "</tr>";
    $total += $sum;
}
$str .= "<tr align='center'><td colspan='5'>小计：" . $total . "元</td></tr>";
$str .= "</table>";
echo ($str);
