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