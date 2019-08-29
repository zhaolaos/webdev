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
$filename="test11.txt";
$data="轻轻地,我走了\r\n正如我轻轻的来\r\n我挥一挥衣袖";
if(is_writable($filename)){
  //if(!$handle=fopen($filename,'a'))
     // echo "不能打开文件$filename";
   $write=file_put_contents("$filename",$data,FILE_APPEND);
 // if($write==false)
      //echo "不能写入到文件$filename";


echo "已经成功向$filename文件中添加内容，添加的字节数是".$write;
}
?> 






 </body>
</html>
