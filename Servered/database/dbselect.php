<?php
$servername = 'localhost';
$username   = 'root';
$password   = 'root';
$dbname     = 'employee';

// mysqli面向对象

// mysqli面向过程

// PDO
try {
    $conn   = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql    = "SELECT * FROM emp_info";
    $result = $conn->query($sql);
    if ($result && $result->rowCount()) {
        // $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $result->fetch()) {
            echo "id: " . $row["e_id"] . " - Name: " . $row["e_name"] . " - Dept: " . $row["e_dept"] . "<br>";
            // echo "id: " . $row[0]. " - Name: " . $row[1]. " - Dept: " . $row[2]. "<br>";
        }
    } else {
        echo "没有查到数据";
    }

} catch (PDOException $e) {
    echo ($e->getMessage());
}

// echo "添加成功";
