# 1. 服务器配置和开发工具
该部分内容介绍开发前需要了解的基本的技术知识、服务器环境的搭建、开发工具的选择等内容
## 1.1 upupw服务器环境配置
>**虚拟主机** 文件路径、域名（特殊域名，如：tp.io，需要设置hosts文件  
>**配置流程** 打开upupw程序界面，输入**11**后打开hosts配置工具，添加域名解析）、端口
## 1.2 开发工具
>**编辑器**：Visual Studio Code/Sublime Text  
>__浏览器__：Google Chrome/Firefox
## 1.3 网站开发基本技术
- 前端技术
	- HTML
	- CSS
	- JavaScript
- 服务器端
	- ASP/ASP.net
	- PHP
	- JSP(J2EE)
	- Python
	- Node.js(用JavaScript)
- 数据库
	- SQL语言
	- MSSQL
	- MySQL
- 面向对象
	- 基本概念，思想，抽象能力，逻辑思维
- 框架
	- Web基本原理、URL、HTTP、Socket、Ftp
	- MVC框架基本原理
	- MVVM框架
# 2. HTML语言
## 2.1 什么是HTML
*HTML*（Hyper Text Marup Language），超文本标记语言，是由[W3C][w3c]制定的一套标准，该标准来源于*SGML*，目前的最高版本是**HTML5**，主要的特点：
- 元素、标记、属性来控制内容
- 可以呈现多种类型的文档: 文本/图片/视频/声音等
- 具有超级链接，是一种超文本文件，一种特殊的文本文件（编码文件），扩展名".html"或".htm"

**备注：**
在创建HTML网页文件时要注意文件的编码格式，常见的编码格式:ASC/GB2312/GBK/Unicode/_**UTF-8**_(推荐)
## 2.2 HTML发展历史
![html发展历史](./images/html-history.png)
## 2.3 HTML语法
- _双标记语法_
```html
<tag property1="value1" prop2="value2 ...">要显示的内容</tag>

<tag>开始标记
</tag>闭合标记
```
- _单标记_
```html
<tag property1="value1" prop2="value2 ...">
```
- _注释语句_
```html
<!--Comments 注释内容-->
```
**备注：**
1. HTML中不区分大小写，但是[W3C][w3c]推荐全部使用小写，这也是一种规范
2. 大部分的标记都可以嵌套，但是要注意嵌套的顺序不要弄错
3. HMTL源码中多余的空格和换行会被忽略
## 2.4 HTML文件基本结构
```html
<!DOCTYPE html>                          文档声明
<html>                                   包裹网页所有内容最外层标签，第1层架构
    <head>                               告知浏览器信息的头部区域，第2层架构
		<meta charset="utf-8">			 文档采用的字符集，第3层
        <title>Welcome to visit!</title> 文档标题，第3层
    </head>
    <body>                               用于显示内容的主体区域，第2层架构
        <p>Hello HTML!<br>               第3、4...n层内容区域
        这是我的第一个网页</p>
    </body>
</html>

head中包含的主要标签有：
    title、meta、link、style
body内部包含的标签主要以下类别
    文本类----标题、段落、换行
    文本修饰----强调、删除线
    超级链接和锚点---- <a href="url#anchor">超级链接</a>，<a name="anchor">锚点</a>
    表格类----表格、行、列、表格标题
    列表类----无序列表、有序列表、定义列表
    表单类----表单、文本框、单选钮、多选按钮、下拉列表、按钮
    多媒体类---图像、视频、音频
    无含义区块（布局）类----div、span
```
## 补充概念
**URL**
- 概念-->Uniform Resource Locator，统一资源定位器
- 基本格式-->协议://IP地址或域名[:端口号][/路径]/文件名
- 协议-->http，https，ftp,file等
- 端口号-->每个协议都有默认端口号，如：http的端口号80。使用协议的默认端口号，端口号可以省略，否则不可以
- HTML文件中使用的URL格式中的路径包含两种：_全部路径(绝对路径)_和_部分路径(相对路径)_
	- 绝对路径：完整的URL地址格式
	- 相对路径："./"代表当前路径，"../"代表上一级（父）路径，"/"代表站点根路径
## 2.5 HTML标记
- _文本说明修饰控制等_
	- **段落换行** <p align="left">This is a paragraph.<br>换行了</p>
	- **标题** <h1>header1</h1>...<h6>header6</h6>
	- **修饰/格式化** 有含义的 <strong>加强</strong> <em>强调</em> H<sub>2</sub>O EC<sup>2</sup>  
	<small>small text</small> <mark>Marked text</mark> <del>Delete</del> <ins>Ins</ins>  
	  无含义的 <b>Bold</b> <i>Italic</i> <u>Underline</u>
	- **水平线** <hr>
	- **预定义** <pre>预定义的内容   空格换行不会忽略</pre>
	- **引用** <blockquote cite="引用内容的出处">长内容引用中的<q>短内容引用</q>。</blockquote>
	- **地址** <address>家庭住址</address>
- _图片/音频/视频_
	- **图片**
	> &lt;img src="images/a.jpg" alt="风景"&gt;
	> <img src="images/a.jpg" alt="风景" width="60%">
	- **音频视频**
	```html
	<audio src="abc.mp3" controls>你的浏览器不支持音频标记</audio>  
	<vedio src="abc.mp4" controls>你的浏览器不支持该视频标记</vedio>
	```
	<audio controls>
		<source src="abc.mp4">
	</audio>
- _列表_
	- **无序列表**
	```html
	<ul type="disc/circle/square"><li>列表项</li></ul>
	```
	- **有序列表**
	```html
	<ol type="1/a/A/i/I"><li>列表项</li></ol>
	```
	- **定义列表**
	```html
	<dl><dt>标题</dt><dd>描述</dd></dl>
	```
- _超链接_
	- **定义超链接**
	```html
	<a href="url">链接文字</a>
	url：可以是相对路径（包含相对文档和相对站点根目录两种），也可以是绝对路径
	```
	- **定义锚点**（书签）
	```html
	<a name="锚点名称">[锚点]</a>
	<a href="url#锚点名称">链接文字</a>
	```
- _表格Table_

	```html
	表格<table></table> 行<tr></tr> 表头<th></th> 单元格<td></td> 表格标题<caption></caption>
	跨行单元格<td rowspan="行数"> 跨列单元格<td colspan="列数">
	```
- _表单Form_
	```html
	表单<form action="" method="get|post"></form>  
	input表单域 <input type="text|password|radio|checkbox|file|hidden|email|image|submit|reset"  name="" value="">
	button按钮<button type="button|submit|reset"> 建议使用按钮来代替input类型中的提交和重置
	下来列表框<select><option value=""></option></select>
	多行文本框<textarea cols="" rows="">内容</textarea>
	HTML5中添加很多新的input类型，这里就不再一一列举额，一般情况所有的表单域要写到表单标记内部
	```
	注意表单中**get**和**post**方法的区别
- _html框架_
	```html
	框架集<frameset><frame src=""></framset>,已淘汰，尽量不用
	嵌入框架<iframe src="url" width="" height="" framborder=""></iframe>
	```
- _其他常用标记_
	```html
	常用于网页布局的<div></div>，控制局部文字的<span></span>
	HTML5中新增的部分标记：
		页面内容头部区域<header></header>
		导航区域<nav></nav>
		定义页面独立内容区域<article></article>
		侧边栏区域<aside></aside>
		定义文档中的节<section></section>
		定义页脚部分<footer></footer>
	```
- _标记分类_
	- 块状标记/区块标记（区块元素）
	- 行内标记/内联标记
- _转义字符_
	```
	空格&nbsp; | '<' &lt; | '>' &gt; | '&' &amp; 等
	```
## 2.6 学习参考
- [菜鸟教程](http://www.runoob.com/)
- [w3cschool](https://www.w3cschool.cn/)
- [CSDN技术论坛](https://bbs.csdn.net/)
- 自己去发现吧^-^















<!-- 文中链接列表 -->
[w3c]: https://w3c.org "Web标准化组织"
<!-- [html]: https://www.w3c.org "HTML" -->