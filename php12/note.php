<?php 
前情提要

1.文件系统常用函数：
	filetype() 取得文件类型，参数为路径
	file_exists() 判断目录或文件是否存在
	filesize() 获取一个文件的大小，字节

	is_readable() 是否可读
	is_writable() 是否可写
	is_executable() 是否可执行

	filectime() file change time 创建时间
	filemtime() file modify time 修改时间
	fileatime() file access time 访问时间

	stat() 获取大部分属性
	路径分隔符：DIRECTORY_SEPARATOR 这是一个常量

	dirname() 返回路径中目录部分
	basename() 返回路径中的文件名部分
	pathinfo() 以数组的形式返回路径信息

	判断文件/目录
	is_dir() 判断是否是目录
	is_file() 判断是否是文件

	目录的操作
	opendir() 打开一个目录，返回一个资源
	readdir() 读取打开的资源并返回文件名
	closedir() 关闭由opendir打开的目录资源

	mkdir() 新建目录
	rmdir() 只能删除空目录
	unlink() 删除文件
	copy() 复制文件
	rename() 重命名一个文件或目录，还可以进行剪切

	文件的操作
	touch() 新建文件
	unlink() 删除文件
	copy() 复制文件
	rename() 剪切文件
	rename() 重命名文件

	file_put_contents() 将字符串写入文件，参3为写入方式：FILE_APPEND(追加)
	file_get_contents() 将文件内容读入一个字符串

	操作文件资源
	fopen() 将文件打开为资源
	参1为文件的URL
	参2为打开的模式
	read
	r 只读方式打开，指针指头
	r+ 读写方式打开，指针指头
	write 
	w 写入方式打开，指针指头，清空内容，文件无，则新建.
	w+ 读写方式打开，指针指头，清空内容，文件无，则新建.
	append
	a 写入方式打开，指针指末尾，文件无，则新建.
	a+ 读写方式打开，指针指头，文件无，则新建.
	execute
	x 创建并以写入方式打开，指针指头，文件存在就报错
	x+ 创建并以读写方式打开，指针指头，文件存在就报错

	binary 
	b 以二进制模式打开文件，一般与以上组合使用
	text
	t 以文本模式打开，windows下的选项，不常用.

	fclose() 关闭打开的文件资源

	读写文件内容的函数
	fwrite() 写入文件
	fread() 读取打开的文件
	fgets() 读取一行 参2可指定读取本行的长度
	fgetc() 读取一个字节
	feof() 测试文件指针是否到了文件结束的位置

	2.复习和学习文件上传所需的只是
	客户端的上传设置：
	  form 三个属性
	  	action 提交地址
	  	method = post
	  	entype = multipart/form-data
	  	表单编码方式。
	  	在使用包含文件上传控件的表单时，必须使用该值
	  input type=file name = myfile

	  限制文件上传大小(隐藏域，此项必须写在上传域之前)
	  <input type="hidden" name="MAX_FILE_SIZE" value="10485760"/>

	服务端的上传设置：
	
	php.ini配置文件的设置
	file_uploads = On 开启
	设置上传文件的开关

	upload_tmp_dir = "d:/wamp/tmp"
	设置上传文件的临时存放目录

	upload_max_filesize =100M
	设置上传文件的最大值 

	upload_file_uploads = 20
	设置单次上传文件的个数

	post_max_size = 200M 默认3M
	设置post方式上传的最大值
	此项设置必须大于文件上传大小

	处理表单中上传文件的信息
	$_GET 和 $_POST接受的 是表单数据
	$_FILES超全局数组存放上传文件信息

		'name' => 上传文件名
      	'type' => 上传文件类型
      	'tmp_name' => 临时存放目录
      	'error' => 错误信息
			其值为 0，没有错误发生，文件上传成功。 
			其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。 
			其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。 
			其值为 3，文件只有部分被上传。 
			其值为 4，没有文件被上传。 
			其值为 6，找不到临时文件夹。
			其值为 7，文件写入失败。 

      	'size' => 上传文件大小

    php提供两个专门处理文件上传的函数
      	is_uploaded_file()
      	判断指定上传文件是否是通过POST上传上来的
      	需要指定一个参数，上传文件$_FILES['myfile']['tmp_name']      		
      	是返回true,否返回false

      	move_uploaded_file($_FILES['myfile']['tmp_name'],$path)
      	移动上传文件到指定目录
      	参数1:上传上来的临时文件
      	参数2： 完整的保存路径
      	成功返回true,失败返回false
      	如果不是POST上来的文件，不执行任何操作返回false
      	(由于某些原因移动失败比如没有权限)
      	注意：如果目标文件已经存在，将会被覆盖。

      	!($myfile为上传域的name属性值,要写为变量,因为每个页面都有不同的name属性值,写死就废了)
		!(形参添加  默认值 $field='myfile')

		3.提示出具体的错误信息
		！(写在以上提示信息之后)
		switch ($fileError) {
		case 1:
		echo '手册复制相应内容';
		break;
		}
		!(运行测试错误：1没有文件上传 2上传过大文件)



