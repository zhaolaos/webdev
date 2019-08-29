<?php
/**
 * 知识点：字符串截取函数
 * strpos\stripos从开始位置查找第一次的结果
 * strrpos\strripos从末尾位置查找（区分\不区分大小写）
 */
// 自定义函数getFileExt()用于获取文件扩展名
function getFileExt($path)
{
    // 从字符串末尾查找扩展名前.的位置，且不区分大小写
    $ext_pos = strripos($path, '.') + 1;
    $ext     = substr($path, $ext_pos);
    return $ext;
}
echo $abc;
