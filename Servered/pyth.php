<?php
header('Content-type:text/html;charset=utf-8');
echo "<table border='1'>";
echo "<caption>九九乘法表</caption>";
for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<td> {$j} x {$i} = " . $j * $i . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
