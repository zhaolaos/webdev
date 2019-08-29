<?php
header('Content-type:text/html;charset=utf-8');
$year = 2016;
// if判断
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo $year . '是闰年';
} else {
    echo $year . '不是闰年';
}