css
     css简介
     Cascading Style Sheets 层叠样式表（级联样式表）
     是一个文本文件，不需要编译，由浏览器解释执行
     作用是定义网页外观，如字体，背景，颜色等
     可以配合javascript做出绚丽的效果

     css特点
     精确地地位 -- 准确的控制页面的任何元素
     精细的控制 -- 可以做到像素级别的调整
     样式与内容分离 -- 便于维护，便于重用

     使用方法
     外链 -- 写在外部的css文件中 通过 link标签引入
     导入 -- @import url() 导入外部的css文件
     内联 -- 写在标签内的style属性中 <p style="color:red;"></p>
     内嵌 -- 写在head头里面
<head>
            <style>
                        p{color:red}
            </style>
</head>

基本语法：
     css格式
          选择器 -- 负责圈定范围，要修改的元素集合
          声明 -- 由属性名和属性值组成，中间用冒号连接（属性名：属性值），用于设定具体样式
          css由选择器和一个或多个声明组成，多个声明之间用分号 -- 选择器（属性名：属性值；属性名：属性值；）

     css注释
          样式表里面的注释就一种 -- /*这里是注释内容*/
     单位
          长度单位
          em --倍数
          px -- pixel，像素，屏幕上显示的最小单位，用于网页设计，直观方便;
          % -- 百分比
          pt: point,是一个标准的长度单位，1pt  = 1/72因故才能，用于印刷业，非常简单易用;
          PPI(DPI) ：pinxel(dot) preinch ,每英寸的像素（点）数，是一个率，表示了（清晰度）（精度）
          cm/mm： 厘米/毫米
          （附公式：px = pt * DPI/72）
          颜色单位：
               英文名 -- red,green,blue...
               十六进制rgb #rgb
                                   #rrggbb
               rgb -- 数字（1-255）rgb（255，0，0）
                         百分比（1-100）rgb（100%，0，0）

               url地址

                    不用引号：url（test.jpg）
                    绝对路径：url（http：//localhost/test.jpg）
                    用单引号：url（'test.jpg'）
                    用双引号：url（"test.jpg"）
选择器
     html选择器
     id选择器
     class选择器
     关联选择器
     组合选择器
     伪选择器（状态选择器）
          a:link{}
          a:hover{}
          a:active{}
          a:visited{}

css常见属性和值
     字体属性
     font -- font:【字体风格】【字体变形】【字体加粗】<字体大小></行高><字体族科>
     font-family -- 字体族科 宋体 | 微软雅黑
     fotn-size -- 字体大小
     font-style -- 字体风格 normal | italic | oblique（斜体）
     font-weight -- 字体加粗 normal | bold | lighter
     font-variant -- 字体变形 normal | small-caps

     颜色属性
     color -- 设置字体颜色 -- blue
                                             #fff
                                             rgb（255，0，0）
     背景属性
     background --
background:<背景颜色>|<背景图像>|<背景重复>|<背景附件>|<背景位置>
例：background:red url('./123.png') no-repeat 100px 10px;

     background-color -- 设置背景色，或设置为transparent（透明）
     background-image -- 背景图片 Url或者 none
     background-repeat -- 背景重复 repeat | repeat-x | repeat-y | no-repeat
     background-attachment -- 背景附件 scroll | fixed

     background-position -- 背景位置
                                             left | center | right（横向）
                                             top | center | bottom（纵向）
                                             或者使用百分比或者数值
                                             background-position:left top;
                                             background-postion:100px 100px;
                                             如果只给一个值，另一个值默认为center

    文本属性

     letter-spacing -- 字母间隔 值为长度 ，可以是负值
     word-spacing -- 词的间距（通过空格识别）

     text-decortaion -- 文字修饰
                                   underline
                                   overline
                                   line-through
                                   none(默认)
     text-align 横向排列 left | right |center| justify

     text-indent 文本缩进 2em（2个字） 50px

     line-height      设置行间距 不允许使用负值
                            行高与高度一致，可以垂直居中

     边框属性

     border border：边框宽高 边框样式 边框颜色
                              border:2px solid red;

     border-style

          border-top-style | border-right-style
               值：
               dotted       点线
               dashed      虚线
               solid          实线
               double      双视线
               groove      槽状线
               ridge         脊线
               inset         内嵌效果
               outset       外凸效果
     border-color
     border-width

鼠标光标属性

     cursor                text -- 文字选择器
                               crosshair -- 十字架
                               wait -- 等待
                               help -- 帮助
                              pointer -- 小手

列表属性
     list- style-type         disc 实心点
                                    circle 圆圈
                                    square 小方框
                                    decimal 数字
                                    lower-roman 小写罗马字
                                    upper-roman 大写罗马字
                                    lower-alpha 小写字母
                                    upper-alpha 大写字母

    list-style-image 使用图片 Url（./123.gif）

    list-style-position 位置 inside      标示 在li里面
                                       outside    标示在li外面

css优先级规则

比较简单易记的一种方法就是给不同选择器分配不同的值：

1.id选择器默认优先级最高，其权值为100

2.class选择器、属性选择器和伪类选择器的权值为10

3.标签选择器的优先级较低，其权值为1

所以在比较样式的优先级时，只需统计选择符中的id、class、标签名个数，然后把对应的权值相加即可。根据结果便可得出优先级高低。

1.结果较大的优先级较高

2.结果相同，则后定义的样式优先级较高

3.如果样式值中含有!important，则该值优先级最高

举例：

代码如下:

h2{color:blue;}//其权值为1

#content{color:#666;}//其权值为100
p .test{color:#ccc;}//其权值为1+10=11

#main div .test{color:red;}//其权值为100+1+10=111
div #main .left #nav{color:#000}//其权值为1+100+10+100=211

制作网页的三剑客
HTML 		负责内容
CSS 		负责样式
JavaScript 	负责行为（特效）

css 层叠样式表
Cascading Style Sheets
作用就是：定义HTML元素该如何去显示

	1996年 设计出来
	1996 css1.0
	1998 css2.0
	2001 css3.0

	目前最新的版本是css3.0
	 	w3c于2011年9月29日开始设计css4

	 css特点：
	 1.样式和内容相分离。
	 2.提高页面浏览速度。（采用css的页面容量小）
	 3.外部样式表可以极大提高工作效率，易于维护和改版。

