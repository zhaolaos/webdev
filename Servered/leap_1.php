<?php
header('Content-type:text/html;charset=utf-8');
$year = 2016;
// 三目运算
$result = (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) ? '是闰年' : '不是闰年';
echo $year . $result;