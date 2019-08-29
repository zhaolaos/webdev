<?php
$servername = 'localhost';
$username   = 'root';
$password   = 'root';
$dbname     = 'employee';

// mysqli面向对象
// $conn = new mysqli($servername, $username, $password, $dbname);
// $stmt = $conn->prepare("Insert into emp_info (e_name, e_dept, date_of_birth) values (?,?,?)");
// $stmt->bind_param("sss", $name, $dept, $birth);
// $name = '陈皮皮';
// $dept = '隆庆';
// $birth = '1988-12-12';
// $stmt->execute();
// $stmt->close();
// $conn->clost();

// mysqli面向过程
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// $stmt = mysqli_prepare($conn, "Insert into emp_info (e_name, e_dept, date_of_birth) values (?,?,?)");
// mysqli_stmt_bind_param($stmt, "sss", $name, $dept, $birth);
// $name = '叶红鱼';
// $dept = '生产部';
// $birth = '1998-12-12';
// mysqli_stmt_execute($stmt);
// mysqli_stmt_close($stmt);
// mysqli_close($conn);

// PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 方式一
    // $stmt=$conn->prepare("Insert into emp_info (e_name, e_dept, date_of_birth) values (?,?,?)");
    // $stmt->bindParam(1,$name);
    // $stmt->bindParam(2,$dept);
    // $stmt->bindParam(3,$birth);
    // 方式二
    $stmt = $conn->prepare("update emp_info set e_name=:name,e_dept=:dept,date_of_birth=:birth where e_id=7");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":dept", $dept);
    $stmt->bindParam(":birth", $birth);
    $name  = '李珲圆';
    $dept  = '生产部';
    $birth = '1998-1-11';
    $stmt->execute();
    echo "添加成功";

} catch (PDOException $e) {
    echo ($e->getMessage());
}

// echo "添加成功";
