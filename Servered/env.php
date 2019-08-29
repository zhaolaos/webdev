<?php
echo $_ENV["path"];

// getenv() 使用示例
$ip = getenv('REMOTE_ADDR');
echo $ip;

// 或简单仅使用全局变量（$_SERVER 或 $_ENV）
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
// 安全地获取环境变量，忽略通过 SAPI 或 putenv 修改的值
$ip = getenv('REMOTE_ADDR', true) ?: getenv('REMOTE_ADDR');
echo $ip;
