<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
class Teacher{
private $teacherName;
function  teach($name)
{
$teacherName=$name;
echo $teacherName."对学生们说：早上好";
}
}
$tea=new Teacher();
$tea->teach("李老师");




?>



</body>
</html>
