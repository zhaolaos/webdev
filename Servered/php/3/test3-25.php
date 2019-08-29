<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form method="post" action="<?php echo$_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname"/>
<input type="submit" value="提交"/>
</form>
<?php
$name=$_REQUEST['fname'];
Echo $name;
?>
</body>
</html>
