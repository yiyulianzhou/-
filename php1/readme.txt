PHP
     超文本预处理器 Hypertext Preprocessor

定义：
     服务器端的，嵌入到html中的脚本语言
               1.服务端：php的代码只能运行在服务器端。
               2.嵌入html:类似css.但不同之处在于，嵌入php代码的文件必须由服务器解析后，才将运行结果返回到浏览器以html呈现。
               3.脚本语言，也叫动态语言，它是服务器（apache）上运行的一个扩展程序，当服务端用到php时才去调用它，不使用时不会去调用

PHP能做什么
               1.收集表单数据
               2.生成动态网页
                         每个人访问自己的QQ空间，数据不同，内容都不同。
               3.字符串处理
                         比如说浏览某些言情小说的时候，每次到OOXX的时候，都是此处忽略一万字：
                李雷和韩梅梅，进入房间，开始******
                    （此处就是PHP对字符串进行了处理，包括屏蔽关键字，敏感词，比如你看到统计局发布最新数据。我国人均GDP增长9%，人均收入达到5w以上...然后你看回复都是，呵呵***我又拖国家后腿了）
               4.动态输出图像
                    统计图表、水印、裁剪、缩放、验证码
               5.处理服务器端文件系统
                    新建、写入、修改、文件上传下载等等
               6.编写数据库支持的网页
               7.会话跟踪控制
                         http协议是无状态协议，只负责响应，经过php处理将同一个用户的相关信息关联起来。

PHP主要应用与以下三个领域
1.服务端脚本
实例文件: bgcolor.php
<?php $color = empty($_GET['c'])?'fff':$_GET['c'];?>
<body bgcolor="#<?php echo $color; ?>">
    <a href="./bgcolor.php?c=f66">红一个</a><br>
    <a href="./bgcolor.php?c=6f6">绿一个</a><br>
    <a href="./bgcolor.php?c=afeeee">蓝一个</a>
>>
2.命令行脚本
实例文件: cmd.php
header("content-type:text/html;charset=gbk");
echo `ipconfig`;
echo `tree D:\wamp`;
>>
3.编写桌面应用程序
     了解即可。
第一个PHP程序
