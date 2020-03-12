# 3. CSS样式表
## 3.1 什么是CSS
        CSS--Cascading Style Sheets--层叠样式表,在W3C官网有这样一段描述  
    `HTML and CSS are the fundamental technologies for building Web pages: HTML (html and xhtml) for structure, CSS for style and layout, including WebFonts.`    
通过这段描述我们能够了解到在网页设计时HTML的作用是对内容结构的描述，而CSS则是用于网页布局和样式的呈现。当然还有WebFonts，这里我们不再赘述。CSS到现在已经发布的版本是CSS3，该版本在CSS2、CSS1的基础上扩充了一些样式属性、伪类、和伪元素，但是还有一些属性标准在浏览器兼容性上还不能满足。单独的样式表文件的扩展名是`*.css`。
## 3.2 如何把样式应用到网页中
- 1.**内联样式**：给需要设置样式的HTML元素（标记）添加_style_属性，然后设属性的值为CSS样式规则声明。示例如下
    ```html
    <p style="font-size: 20px; color: red;">给当前的段落设置字体为20像素，颜色为红色的样式</p>
    ```
- 2.**内部样式**：在HTML网页的```<head></head>```区域中添加```<style></style>```标记，然后在该标记内部设置CSS样式规则，语法为：Selector{sRules}，多个规则都可以设置。示例如下
    ```html
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>内部样式举例</title>
            <style>
                p {
                    font-size: 20px;
                    color: red;
                }
            </style>
        </head>
        <body>
            <p>这是一段字体为20像素，颜色为红色样式的段落</p>
        </body>
    </html>
    ```
## 3.3.CSS选择器
1. *元素选择器*
    -  标记选择器E
    - id选择器E#id
    - 类选择器E.class
    - 通配符选择器*
2. _关系选择器_
    - 包含选择器E F
    - 子选择器E>F
    - 相邻选择器E+F
    - 兄弟选择器E~F
3. _属性选择器_
    - E[att]  选择具有att属性的E元素。
    - E[att="val"]  选择具有att属性且属性值等于val的E元素。
    - E[att~="val"]  选择具有att属性且属性值为一用空格分隔的字词列表，其中一个等于val的E元素。
    - E[att^="val"]  选择具有att属性且属性值为以val开头的字符串的E元素。
    - E[att$="val"]  选择具有att属性且属性值为以val结尾的字符串的E元素。
    - E[att*="val"]  选择具有att属性且属性值为包含val的字符串的E元素。
    - E[att|="val"]  选择具有att属性且属性值为以val开头并用连接符"-"分隔的字符串的E元素，如果属性值仅为val，也将被选择。
4. *伪类选择器*
    - 链接伪类：:link,:visited
    - 用户行为伪类：:hover,:active,:focus
    - 结构性伪类：:root,:empty
        - 结构性子元素伪类：:first-child,:last-child,:only-child,:nth-child(n),nth-last-child(n)
        - 结构性子元素类型伪类：:first-of-type,:last-of-type,:only-of-type,:nth-of-type(n),:nth-last-of-type(n)
    - 目标伪类：:target
    - 否定伪类：:not
    - 用户界面UI伪类：:checked,:enabled,:disabled
5. 伪元素（伪对象）选择器  
        :before/::before,:/after/::after,:selection  
        **<font color="red" size="2">注意：为了跟伪类区别，建议使用双冒号</font>**  

## 3.4.CSS属性

- 颜色 Color<br>
        color,opacity
- 字体 Font<br>
        font,font-style,font-weight,font-size,font-family
- 文本 Text<br>
        text-align,text-indent,vertical-align,line-height
- 文本装饰 Text Decoration<br>
        text-decoration,
- 定位 Positioning<br>
        position,z-index,top,right,bottom,left,clip
- 布局 Layout<br>
        display,float,clear,visibility,overflow
- 尺寸与补白 Dimension and Margins and Paddings<br>
        width,min-width,max-width,height,min-height,max-height,margin,padding
- 背景与边框 Backgrounds and Borders<br>
        border,border-width,border-style,border-color,box-shadow,border-radius,
        border-image
        background,background-color,background-image,background-repeat,background-attachment,background-position,background-origin,background-clip,background-size
- 列表 List<br>
        list-style,list-style-image,list-style-position,list-style-type

- 转换 Transform<br>
        transform,transform-origin,transform-style
- 过渡 Transition<br>
        transition,transition-property,transition-duration,transition-timing-function,transition-delay
- 动画 Animation<br>
        animation,animation-name,animation-duration,animation-timing-function,
- 媒体查询 Media Queries<br>
        width,height,device-width,device-heigh,