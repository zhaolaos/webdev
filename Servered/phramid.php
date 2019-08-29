<?php
// 初始化金字塔的当前行数、总行数、输出符号
$line = 1;
// 使用while循环判断当前行数是否小于设定的总行数5
while ($line <= 5) {
    // 初始化金字塔中每行的空格和星星的数量
    $empty_pos = $star_pos = 1;
    // 计算每行星星前面空格数 = 金字塔的总行数 - 当前所在行数
    $empty = 5 - $line;
    // 计算每行星星数 = 当前行数 * 2 - 1
    $star = 2 * $line - 1;
    // 循环输出每行的空格数量
    while ($empty_pos <= $empty) {
        echo '&nbsp;';
        $empty_pos++;
    }
    // 循环输出星星
    while ($star_pos <= $star) {
        echo '*';
        $star_pos++;
    }
    echo "<br>";
    ++$line;
}
