<?php
$servername = 'localhost';
$username   = 'root';
$password   = 'root';
$dbname     = 'employee';

// mysqli面向对象
$conn = new mysqli($servername, $username, $password);

// mysqli面向过程
// $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn->connect_error) {
    echo "执行成功";
}
// $sql = "create database mydb";
$conn->query("use mydb");
$sql = "CREATE TABLE MyGuests (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50),
 reg_date TIMESTAMP )";
if ($conn->query($sql) === true) {
    echo "数据库创建成功";
}
