<?php define('APP', 'MyWeb');
ob_clean();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>网页布局</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">头部区域</div>
    <!-- 主体内容区域 -->
    <div class="main">
        <!-- 内容区域 -->
        <div class="content"><?php include './content.php';?></div>
        <!-- 侧边栏区域 -->
        <div class="side"><?php include './side.php';?></div>
    </div>
    <div class="footer">底部区域</div>
</body>
</html>