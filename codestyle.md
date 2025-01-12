来自[编写灵活、稳定、高质量的HTML代码的规范](http://www.divcss5.com/html/h50922.shtml)


一、唯一定律

    无论有多少人共同参与同一项目，一定要确保每一行代码都像是唯一个人编写的。

二、HTML

2.1 语法

（1）用两个空格来代替制表符（tab）————这是唯一能保证在所有环境下获得一致展现的方法。

（2）嵌套元素应当缩进一次（即两个空格）。

（3）对于属性的定义，确保全部使用双引号，绝不要使用单引号。

（4）不要在自闭合（self-closing）元素的尾部添加斜线 -- HTML5 规范中明确说明这是可选的。

（5）不要省略可选的结束标签（closing tag）（例如，\</li> 或 \</body>）。

2.2 Example
 
```
<!DOCTYPE html>
<html>
  <head>
    <title>Page title</title>
  </head>
  <body>
    <img src="images/company-long.png" alt="Company">
    <h1 class="hello-world">Hello,world!</h1>
  </body>
</html>
```


三、HTML5 doctype

为每个 HTML 页面的第一行添加标准模式（standard mode）的声明，这样能够确保在每个浏览器中拥有一致的展现。
```
<!DOCTYPE html>
<html>
  <head>
  </head>
</html>
```
四、语言属性

根据 HTML5 规范：

强烈建议为 html 根元素指定 lang 属性，从而为文档设置正确的语言。这将有助于语音合成工具确定其所应该采用的发音，有助于翻译工具确定其翻译时所应遵守的规则等等。
```
<html lang="en-us">
  <!-- ... -->
</html>
```
五、IE 兼容模式

IE 支持通过特定的 <meta> 标签来确定绘制当前页面所应该采用的 IE 版本。除非有强烈的特殊需求，否则最好是设置为 edge mode，从而通知 IE 采用其所支持的最新的模式。
```
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
```
六、字符编码

通过明确声明字符编码，能够确保浏览器快速并容易的判断页面内容的渲染方式。这样做的好处是，可以避免在 HTML 中使用字符实体标记（character entity），从而全部与文档编码一致（一般采用 UTF-8 编码）。
```
<head>
  <meta charset="UTF-8">
</head>
```
七、引入 CSS 和 JavaScript 文件

根据 HTML5 规范，在引入 CSS 和 JavaScript 文件时一般不需要指定 type 属性，因为 text/css 和 text/javascript 分别是它们的默认值。
```
<!-- External CSS -->
<link rel="stylesheet" href="code-guide.css">

<!-- In-document CSS -->
<style>
  /* ... */
</style>

<!-- JavaScript -->
<script src="code-guide.js"></script>
```
八、实用为王

尽量遵循 HTML 标准和语义，但是不要以牺牲实用性为代价。任何时候都要尽量使用最少的标签并保持最小的复杂度。
九、属性顺序

9.1 从大到小

HTML 属性应当按照以下给出的顺序依次排列，确保代码的易读性。

（1）class

（2）id, name

（3）data-*

（4）src, for, type, href, value

（5）title, alt

（6）role, aria-*

9.2 Example
```
<a class="..." id="..." data-toggle="modal" herf="#">
  Exmaple link
</a>

<input class="form-control" type="text">

<img src="..." alt="...">
```
9.3 说明

class 用于标识高度可复用组件，因此应该排在首位。id 用于标识具体组件，应当谨慎使用（例如，页面内的书签），因此排在第二位。

十、布尔（boolean）型属性

10.1 注意

（1）布尔型属性可以在声明时不赋值。XHTML 规范要求为其赋值，但是 HTML5 规范不需要。

（2）元素的布尔型属性如果有值，就是 true，如果没有值，就是 false。

（3）如果属性存在，其值必须是空字符串或 [...] 属性的规范名称，并且不要在首尾添加空白符。

简单来说，就是不用赋值。

10.2 Example
```
<input type="text" disabled>

<input type="checkbox" value="1" checked>

<select>
  <option value="1" selected>1</option>
</select>
```
十一、减少标签的数量

编写 HTML 代码时，尽量避免多余的父元素。很多时候，这需要迭代和重构来实现。

十二、减少 JavaScript 生成的标签

通过 JavaScript 生成的标签让内容变得不易查找、编辑，并且降低性能。能避免时尽量避免。