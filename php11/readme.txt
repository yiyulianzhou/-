文件上传
	客户端上传文件配置：
		1.form 表单
		2.action	提交地址
		3.method	post 必要条件
		4.enctype="multipart/form-data" 必要条件
		5.表单限制上传文件大小（通过隐藏域）
		<input type="hidden" name="MAX_FILE_SIZE" value="10485760">

	服务器上传文件配置：
		1.file_uploads = On
		文件上传开关

		2.upload_tmp_dir ="D:/wamp/tmp"
		上传文件临时存放目录

		3.upload_max_filesize = 2M
		php处理上传文件的最大值 其值要小于post_max_size

		4.post_max_size = 8M
		表单提交数据的最大值 其值要大于upload_max_filesize

		5.max_file_uploads = 20
		表单单次上传文件的最大个数

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
      		参数2：完整的保存路径
      		成功返回true,失败返回false
      		如果不是POST上来的文件，不执行任何操作返回false
      		(由于某些原因移动失败比如没有权限)
      		注意：如果目标文件已经存在，将会被覆盖。