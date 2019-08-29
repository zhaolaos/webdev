<?php
// 设定字符集
header('charset=utf-8');
// 定义常量保存折扣
const DISCOUNT = 0.8;
// 定义商品、数量、价格
$banana       = '香蕉';
$apple        = '苹果';
$orange       = '橘子';
$banana_num   = 2;
$apple_num    = 1;
$orange_num   = 3;
$banana_price = 7.99;
$apple_price  = 6.89;
$orange_price = 3.99;
// 计算每种商品总价格
$banana_total = $banana_num * $banana_price;
$apple_total  = $apple_num * $apple_price;
$orange_total = $orange_num * $orange_price;
// 计算所有商品的总价格
// 计算公式：略
$total = ($banana_total + $apple_total + $orange_total) * DISCOUNT;

// 输出商品信息

$str = "<table border='1'>";
$str .= "<tr><td>商品名称</td><td>商品数量(斤)</td><td>商品价格(元/斤)</td></tr>";
$str .= "<tr><td>$banana</td><td>$banana_num</td><td>$banana_price</td></tr>";
$str .= "<tr><td>$apple</td><td>$apple_num</td><td>$apple_price</td></tr>";
$str .= "<tr><td>$orange</td><td>$orange_num</td><td>$orange_price</td></tr>";
$str .= "<tr><td colspan='3'>商品折扣：<span>" . DISCOUNT . "</span></td></tr>";
$str .= "<tr><td colspan='3'>折后商品总价格：{$total}元</td></tr>";
$str .= "</table>";
echo ($str);
