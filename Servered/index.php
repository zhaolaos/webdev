<?php
session_start();
// $_SESSION['user'] = 'dfxjlkj';
header("Content-type:text/html;charset=utf-8");
require('./directory.php');
directory();
// echo $_SESSION['user'];
