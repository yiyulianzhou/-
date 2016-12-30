文件上传

客户端的上传设置：
form 	标签里三个属性
		action="" 提交地址
		 
		method="post"
		提交方式，文件上传时，必须使用post方式

		enctype="multipart/form-data"
		提交的编码方式
		查看手册
		在使用包含文件上传控件的表单时,必须使用该值,否则文件上传不了!（告诉服务器我们要上传的是文件）

		input  将其设置为文件上传域（选择框）
    	<input type="file" name="myfile">

    	还可以在form表单中 限制文件上传的大小.
		设置一个隐藏域hidden,其中name="MAX_FILE_SIZE"
		并设置value="10485760"(单位字节)(此处为10M)
		!(此项要写到file上传域的前面)
		<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
		!(此项设置只是对浏览器的建议,可绕过其设置,但还是建议去设置.F12修改即可)

		[DIR] up1:
		按照以上去写一个 表单页面    up.html

		写完运行,上传一个文件,提示doup.php文件不存在
		引出服务器端的设置
>>
服务器的上传设置：
本地文件上传到服务器之后,需要服务器端来接收并处理.（把临时文件移动到指定目录）

	php.ini中的设置
    file_uploads = On (line 801)
    设置上传文件的开关  On开启

    upload_tmp_dir =  (line 806)
        设置上传文件存放的临时目录  默认wamp/tmp目录
        如果不指定,就会默认存放到系统自己的临时目录
        Linux下,会放在家目录的tmp下面,一旦重启或清除,就都没了

    upload_max_filesize = 2M (line 810)
        设置上传文件的最大值  默认64M
        建议改为100M,以后根据需求来设置

    post_max_size = 3M (line 660)  
        设置post接收文件的最大值 默认3M
        建议改为200M
        post里除了上传的文件,还会有其他表单信息.所以此设置要大于上传文件值.此外文件大于此值的话$_FILES就接不到任何信息
    max_file_uploads = 20 (line 813)
        单次上传最大的文件数量

------------------
设置好了以上两个，就可以在php脚本里：

处理表单中 上传文件信息
	在三种接收方式中
	$_GET / $_POST 来接收表单数据  $_POST接不到file
	$_FILES 保存上传文件信息

$_FILES数组解析
	1.["name"] 文件原名，包括扩展名
	2.["type"] 上传文件的MIME类型
		主类型/子类型
		image/jpeg
		image/png
		text/html
		text/plain 普通文本文件.php .txt
        application/x-rar-compressed .rar
        application/zip  .rar  .zip
        video/x-msvideo AVI文件 .avi
    3.["tmp_name"] 临时存放文件名，包含路径
    4.["error"] 错误号：
    	0:没有错误发生,文件上传成功.
        	1:上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值
        	2:上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值
        	3:文件只有部分被上传
        	4:没有文件被上传
        	6:找不到临时文件夹
        	7:文件写入失败 
    5.["size"] 上传文件的大小，单位为字节

处理上传的文件：
	php里有提供 专门处理文件上传的两个函数

is_uploaded_file()
	判断指定的文件 是否 是通过post的方式上传的
	参数填入要检查的文件名
		$_FILES下的['tmp_name']
	是post返回true.否则返回false

move_uploaded_file()
	将上传的文件移动到指定位置
	参1：指定上传的文件，即临时文件
	参2：移动文件到哪个位置
	成功返回true
	如果不是合法的上传文件，不会出现任何操作，将返回false(如:不是通过post上传来的)
	如果是合法的上传文件，但由于某些原因无法移动
	（如：权限不足，磁盘写满，磁盘损坏等等），就不会出现任何操作，返回false,并发出一条警告
>>
------------------------------
文件上传的函数实现
	上传成功，返回文件名，失败返回false
[DIR]up1:
	表单页面 	up.html
	上传处理页 	doup.php

0.声明函数
up();//调用上传处理函数

function up(){
	echo '<pre>';
		print_r($_FILES);

1.//判断$_FILSE是否为空 写在函数最开头
if (empty($_FILES)) {
	echo '可能设置错误！<br>请检查表单设置或php.ini内post设置<br>';
	return false;
}
2.//接收上传来的两个文件名
$fileName = $_FILES['myfile']['name'];
$fileTmp = $_FILES['myfile']['tmp_name'];

3.//移动临时文件到指定位置
if (move_uploaded_file($fileTmp,$fileName)) {
	echo '上传成功.';
}else{
	echo '上传失败！';
	return false;
}

4.将调用结果打印
	$saveName = up();
	var_dump($saveName);
>>
----------------------------
[DIR] up2:
改进表单页面 up.html
添加<input type="hidden" name="MAX_FILE_SIZE" value="10485760">

改进上传处理页面 doup.php
1.接收到所有的上传信息，并生成变量
//获取上传信息
$error = $_FILES[$myfile]['error'];
$size = $_FILES[$myfile]['size'];
$type = $_FILES[$myfile]['type'];
$fileName = $_FILES[$myfile]['name'];
$tmp = $_FILES[$myfile]['tmp_name'];

!($myfile为上传域的name属性值,要写为变量,因为每个页面都有不同的name属性值,写死就废了)
!(形参添加  默认值 $field='myfile')

2.//判断错误
error>0 说明有上传错误信息，提示并返回false
if ($fileError > 0){
	//提示信息
	echo '文件上传出错.<br>';

	//一旦出错，在此终止
	return false;
}

3.提示出具体的错误信息
！(写在以上提示信息之后)
switch ($fileError) {
	case 1:
		echo '手册复制相应内容';
		break;
}
!(运行测试错误：1没有文件上传 2上传过大文件)
