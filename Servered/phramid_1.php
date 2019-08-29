<?php
// 初始化金字塔的当前行数、总行数、输出符号
$line    = 1;
$maxLine = 5;
$empty   = '&nbsp;';
$star    = '*';
// 使用for循环判断当前行数是否小于设定的总行数5
for ($i = $line; $i <= $maxLine; $i++) {
    // 计算每行空格数
    $emptyNum = $maxLine - $i;
    // 循环输出每行的空格数量
    for ($j = 1; $j <= $emptyNum; $j++) {
        echo $empty;
    }
    // 计算每行星星数量
    $starNum = 2 * $i - 1;
    // 循环输出星星
    for ($j = 1; $j <= $starNum; $j++) {
        echo $star;
    }
    echo "<br>";
}
