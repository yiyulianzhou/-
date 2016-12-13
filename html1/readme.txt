LAMP
	L 	Linux
	A 	Apache
	M	Mysql
	P	PHP

	网站技术的解决方案，70%的网站流量，是由LAMP提供

HTML
	超文本标记语言

	超文本
		不仅仅是文本，可以加载超链接、图像、声音、视频等媒体文件

		超文本，就是通过超链接，将全球的超文本连接成为一个网状的文本。

	标记
		html中通过不同的标签来显示不同的内容

软件架构：
	B/S
		B Browser(浏览器)	S Server(服务器)

	C/S
		C Client(客户端)	S Server(服务器)

1.注释
	<!-- 注释 -->
	<!-- 注释 注释是不会显示在网页内容中的-->
	<!-- 注释 注释在网页源代码中可以看到-->
	<!-- 注释 注释是对代码的注解-->
	<!-- 注释 注释有助于你快速的对代码恢复记忆-->
	<!-- 注释 注释有助于团队开发-->

2.全局构架标签
html
	表示写在这一对标签中的内容是html文档的内容

head
	头标签

title
	标题标签，写在一对head标签中，也就是网页的标题

body
	网页主体
	属性：
		bgcolor		背景颜色
		background	背景图片
		text
<!DOCTYPE html>
<html><!--开始标签-->
	<head>
		<meta charset="utf-8">
		<title>网页标题:全局构架和注释</title>
	</head>
	<body>
		<!--网页主题内容-->
	</body>
</html><!--结束标签-->
-------
	<!DOCTYPE html>
		声明头:声明该文档类型为html5
	<html></html>
		表示写在这一对标签中的内容是html文档的内容
	<head></head>
		头标签:设置标题、引用脚本、加载样式表、提供元信息等等
	<title></title>
		标题标签:写在一对head标签中,就是网页的标题
	<body></body>
		网页主体。
		属性:
			[bgcolor]      背景颜色
			[background]   背景图片
			[text] 				 文字颜色

	<meta> 元信息标签
		html标签属性 属性名称="属性值" 的形式设置
>>
3.语法
	1.HTML不区分大小写，推荐小写
	2.html元素 标签及标签中的内容组成一个元素 html元素
	3.属性 人或物特征或特点
		属性名称="属性值"，不区分大小写。推荐小写。
		多个属性之间用空格隔开，多个属性值也用空格隔开
		标签中的多个空格只会解析一个，所以标签间可换行，利于排版提高可读性。
(同级元素竖列对齐,建议tab缩进为2个空格 "tab_size": 2,)
(书写代码要按逻辑构成来写,绝对不能按顺序写.从底层基本来养成良好的编码习惯.利人利己)

4.格式标签
	4.1
	<p></p>	段落
		将包含的内容分段显示，一个P标签代表一段
		每个段落标签之间会有一个空行
		p标签可以没有结束标签，建议写完整。

	4.2
	<br>	换行	写一个br就代表换一行
		(写两段话，使用br标签使其换行显示)

	4.3
	<hr> 	水平分隔线
	<hr size="40" width="600" align="center" color="#0000ff">
	属性：
		[size]	分隔线的粗细，单位是像素(pixel)
		(打开fsc,测量一下)
		[width]	宽度	可制定像素值/百分比
		[align]	水平位置	left center right
		[color]	颜色
			英文单词来作为其值 orange
			也可以用十六进制来表示颜色 65535种
			(三基色：红绿蓝)(三原色：红黄蓝)
			#rrggbb	三维简写#rgb (red green blue)
			#ff0000	#abc #000黑	#fff白
			(日常进制：7天1星期。24小时1天。60分钟1小时)

	4.4
	<center></center>	居中标签
		将标签中的文本内容居中
		welcome to ShangHai

	4.5
	<pre></pre> 	原样输出	格式化输出内容。
	html会对将多个空格/换行都解析为一个空格。想要格式化输出文本，就使用pre标签，它会保留空格及换行等元素，将他们原模原样的放到页面中。(常常用来输出计算机源码)
		<pre>
				上
			左		右	
				下
		</pre>

	4.6
	列表标签
	ol		有序列表
	ul		无序列表
	li 		列表项

	定义列表
	dl 		定义列表
	dt 		定义列表标题
	dd 		定义列表详情

	ol 		有序列表
		[type] 		列表样式：1 a A i I
		[start] 	列表开始位置，填数字！
		[reversed] 	列表书序设置维降序
<ol>
	<li>神探夏洛克</li>
	<li>你的名字</li>
	<li>奇异博士</li>
	<li>魔兽世界</li>
</ol>

	ul 		无序列表
		[type]		circle disc square 列表样式
	li 		列表项
		[type] 		设置样式类型(不建议使用)
		[value]		起始值(不建议使用)



<ul>
	<li>停车坐爱枫林晚</li>
	<li>百日依山尽</li>
	<li>黄河入海流</li>
	<li>锄禾日当午</li>
</ul>

	dl	定义列表 	define list
	dt 	定义列表标题define title
	dd 	定义列表详情define detail

	<dl>
		<dt>CHN</dt>
		<dd>中华人民共和国，1949年10月1日建立</dd>

		<dt>USA</dt>
		<dd>美利坚合众国，1776年7月4日建立</dd>

		<dt>DDS</dt>
		<dd>Da Diao Si</dd>
	</dl> 

---------------------------

总结格式标签
格式标签就是排版相关的标签
p br hr pre center
ol ul li dl dt dd
>>
---------------------------


5.文本标签

5.1
h1 ~ h6 标题标签 (图h.jpg)

	<h1>我就是个标题...</h1>
	<h2>我就是个标题...</h2>
	<h3>我就是个标题...</h3>
	<h4>我就是个标题...</h4>
	<h5>我就是个标题...</h5>
	<h6>我就是个标题...</h6>
	<p>我就是个段落</p>

	1).标题字体默认加粗.1~6大小依次递减
	2).html4 h1标签只能出现一次
		搜索引擎的网络爬虫,就是一种自动检索工具
		广泛用于互联网搜索引擎或其他类似网站,用来获取或更新这些网站的内容和检索方式,html5之前就是根据你h1这种标签来判断你网页的标题内容的,你若一个页面使用多次h1标签,爬虫就认为你是在作弊,就放弃对你的收录了.
  html5之后h1就是随便用,因为html5的最大特点就是语义化的标签.
  (
  article 	定义文章
  nav		定义导航
  header	定义页眉
  footder	定义页脚
  time      定义时间
  video		定义视频
  audio		定义音频
  )

  ------------
5.2
	<b></b>		加粗
	<i></i>		斜体
	<u></u>		下划线
	！(HTML标签可嵌套使用)

	<b>我老婆只喜欢两种花</b><br>
	<i>有钱花</i>
	<u>随便花</u>
	<p><b><i>我就是个</i></b></p>

5.3
	化学表达式H2O	幂中的指数怎么表示
	<sub></sub>		下标 b圈在下
	<sup></sup>		上标 p圈在上
	H<sub>2</sub>O<br><br>
	a<sup>2</sup>+b<sup>2</sup>=c<sup>2</sup><br><br>
	2<sup>2</sup>+3<sup>3</sup>=31<br><br>

5.4
	<font></font>	字体标签
	属性：
		[face] 	字体样式(有字体文件才改变)
		[size] 	字体大小，值为1~7，默认3(+1从默认值3开始)
		[color] 字体颜色
------------------------------
总结文本标签：
文本标签就是用于定义文本的
h1 h2 h3 h4 h5 h6
b i u sub sup font
>>

6.超链接标签
超链接是html的灵魂，如果没有超链接，你能从一个页面跳转到另一个页面么？所以好好学这个
基本写法：
<a href="">xxx</a>
	不写href的话，就是普通文本
	写上href没有给值的话，就是本页跳转

6.1
	[href] 指定所连接文件的URL路径
	URL
	统一资源定位符 Uniform Resource Locator
		俗称网址，网络上的任何资源都以有一个自己的URL地址。

	分析下面的网址：
	http://www.acfun.tv:80/v/list144/index.htm?name=05&a=1#page=1

	http://  www.acfun.tv    :80   /v/list144/ index.htm ?name=05&a=1 #page=1
	协议        域名         端口  目录        文件       参数        锚

	路径分为两种：
	绝对路径
		D:\wamp\www\tz.php
	相对路径
		./	当前目录
		../	上级目录
		/	根目录
		要正常访问路径，必须要通过浏览器访问服务器才行

		！(href属性中不能使用绝对路径，可以使用相对路径，相对路径会被转化为URL来使用)

		！(用相对./ ../ /和网址举例，制定target="_blank" 新窗口打开一个链接)

------------
6.2
	[target] 	指定链接的页面在浏览器窗口中的打开方式
	值有：
	_self 		在当前窗口中打开文件，此参数是默认值，通常不需要指定。
	_blank	在新的浏览器窗口/标签中打开文件

	_top 	在顶层窗口中打开文件
	_parent 在父级窗口中打开文件(常用于frameset frame)
	framename 指定的窗口中打开(明后天会讲到)

6.3
	[name] 属性指定页面的锚点名称
	用于锚点跳转，可跳转到本页的锚点或跳转到其他页的锚点

	name="top"(href设置锚点)
	href="#top"
	实例：文件14.html
	三段话 > 加三个跳转锚点，并在段落位置加name
	>添加回顶部> 问如何回段落1
	>>

7.图片标签
网页中常见的图片格式：.jpg(jpeg) .png .gif .bmp

<img> 图片标签
	[src] 	指定图片资源的地址(url)
	[title] 鼠标指向图片时显示的文字
	[alt]
		1.图片无法加载时显示的替代文字
		2.搜索引擎通过该属性值抓取图片
	[width] 宽
	[height] 高
		只设置一个另一个会自适应。
	(写100~400 四个图片)

	！(各个浏览器对title解析不一致，要注意。)
	实例文件：15.html
	当图片无法加载时
	只写title:
	chrome显示为替代名字，指向正常
	IE,firefox 不显示替代名字，指向正常
	只写alt:
	IE会将指向也显示为alt内容
---------------------------------

8.HTML标签的通用属性(全局属性)
通用html属性
[id] 	设置标签的id
		id是唯一存在的
		id区分大小写
		必须以字母开头
		其他部分由：(A-Za-z)(0-9)-_组成
[class]	设置标签的类名
		类名可重复定义
		不区分大小写
		必须以字母开头
		其他部分由：(A-Za-z)(0-9)-_组成
[style] 设置标签的样式
[title] 设置关于元素的额外信息
		这些信息通常会在鼠标移动到元素上时显示一段提示文本

实例：
<ul style="font-size:25px;">
	<li>1</li>
	<li style="color:#00f;">2
		<ul>
			<li>a</li>
			<li>b</li>
			<li>c</li>
		</ul>
	</li>
	<li>3</li>
</ul>
<a href="#" title="此链接暂无启用">我是链接</a>
<h2 title="da diao si" style="color:#f00">DDS</h2>
-------------

ps.延展部分
head头部分常用标签
<meta>元信息标签 定义了与文档相关联的属性，如字符集/简介/关键字/重定向
关键字：<meta name="keywords" content="HTML,DHTML,XML,JavaScript,">
重定向：<meta http-equiv="Refresh" content="5;url=http://www.baidu.com">

英文：
	attribute 	属性
	charset		字符集
	global		全局全球