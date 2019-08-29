<?php
// 初始化双色球号1~33
$red_num = range(1, 33);
// 随机从红色球号码区数组中取出6个值
$keys = array_rand($red_num, 6);
// 打乱球号顺序
shuffle($keys);
foreach ($keys as $value) {
    // 判断：如果红球号码是一位数时，在左侧补零
    $red[] = $red_num[$value] < 10 ? ('0' . $red_num[$value]) : $red_num[$value];
}
// 初始化蓝球
$blue_num = rand(1, 16);
$blue     = $blue_num < 10 ? ('0' . $blue_num) : $blue_num;
foreach ($red as $v) {
    echo '<span style="color:red">' . $v . '</span> ';
}
echo '<span style="color:blue">' . $blue . '</span>';
