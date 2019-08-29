<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
<?php
function userLogin($name,$pwd){
if($name!="lxy")
	echo "用户名不正确";
elseif($pwd!="123")
    echo  "密码不正确";
else
	echo  "登录成功";
}
?>

<form method="post" action="" onsubmit=<?php   userLogin("$_POST[user]","$_POST[pwd]");?>>
用户名：<input type="text" name="user">
密码：<input type="password" name="pwd">
<input type="submit" value="登录">

</form>

<?php
//echo $_POST["user"];
//echo $_POST["pwd"];
 //userLogin("$_POST[user]","$_POST[pwd]");


?>


 </body>
</html>
