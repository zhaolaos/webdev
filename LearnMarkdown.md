# MarkDown文件语法学习
### 1.插入图片
    ![alt text](imageUrl)
    例如：![风景图片](/images/a.jpg) 效果如下
![This is a image](/images/a.jpg)
*Note:* 插入图片的方式跟链接一样的方式
### 2.段落换行
Markdown文件默认按照窗口的宽度自动换行，如果需要设置换行，就在要换行的地方输入至少两个以上的空格。  
这里是一个换行。

段落产生需要在前面添加一个空行
### 3.链接
1. 方法1  
    [链接文字](linkUrl)
2. 方法2  
    [链接文字][链接标签名-锚点]
    这种方式需要在文本或所在段落的最后添加锚点的定义[链接标签名-锚点]: linkUrl "链接描述"

    [链接标签名-锚点]: /index.html "引用链接"
[首页][index]
[列表](/list.html)

[index]: /index.html
### 4.强调
*Italic*
**Bold**
_Italic_
__Bold__
### 5.分割线
分割线使用超过三个以上的-、*等符号，"-"分割线前要有空行否则就是按照二级标题显示前面的文字，推荐使用星号作为分割线
****
----
### 6.标题
一级标题
====
# 一级标题
二级标题
----
## 二级标题
###### 六级标题
### 7.不支持的html标记

Markdown支持扩展，以下是一个简单的表格:

First Header | Second Header | Third Header
------------ | ------------- | ------------
Content Cell | Content Cell  | Content Cell
Content Cell | Content Cell  | Content Cell
可以在起始和结束位置添加管道到表格:

| First Header | Second Header | Third Header |
| ------------ | ------------- | ------------ |
| Content Cell | Content Cell  | Content Cell |
| Content Cell | Content Cell  | Content Cell |
可以在分隔符行添加冒号已指定每一列的对其方式:

First Header | Second Header | Third Header
:----------- | :-----------: | -----------:
Left         | Center        | Right
Left         | Center        | Right
******
### 8.列表

无序列表使用*、+、-等符号，如:
* HTML
* CSS
* Javascript
----
+ HTML
+ CSS
----

- [ ] Java
- [ ] Php

有序列表使用数字，如:
1. C
2. C++
3. C#

### 9.引用
    使用4个空格或tab就会产生一个引用，这里使用了4个空格
### 10. 快捷的超级链接或Email连接
<http://gitee.com/zhaolaos/staruml-php>
<zhaolaos@outlook.com>

```python
@requires_authorization
class SomeClass:
    pass

if __name__ == '__main__':
    # A comment
    print 'hello world'
```
```php
/**
* 实现一个类
*/
namespace think;

use abc\Model;
class SomeClass
{
    public function _construct()
    {

    }
}
```
>*hkhkhj*
>- hkjhkj
>- hkhkjhkhkhkhkj
>- gjgjh
