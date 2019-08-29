<?php
$arrayName = array('name' => '张三', 123, 'sex' => '男', 23);
$arr       = array(0, 123, 3, 4, 5, 6);
foreach ($arrayName as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}
// for ($i = 0; $i < count($arrName); $i++) {
//     echo $arrName[$i] . '<br>';
// }
echo "数组arrayName的长度是" . count($arr) . "<br>";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br>';
}
