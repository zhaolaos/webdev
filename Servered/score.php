<?php
header('Content-type:text/html;charset=utf-8');
// 定义学生和成绩
$name  = '小明';
$score = 78;
// 判断成绩是否为一个合法值
if (is_int($score) || is_float($score)) {
    if ($score >= 90 && $score <= 100) {
        $grade = 'A级';
    } elseif ($score >= 80 && $score < 90) {
        $grade = 'B级';
    } elseif ($score >= 70 && $score < 80) {
        $grade = 'C级';
    } elseif ($score >= 60 && $score < 70) {
        $grade = 'D级';
    } elseif ($score >= 0 && $score < 60) {
        $grade = 'E级';
    } else {
        $grade = "成绩应在0~100之间";
    }

} else {
    $grade = "输入的成绩不合法";
}

// 输出学生的成绩等级
echo "<h2>学生成绩等级</h2>";
echo "<p>学生姓名: {$name}</p>";
echo "<p>分数成绩: {$score}</p>";
echo "<p>等级成绩：{$grade}</p>";
