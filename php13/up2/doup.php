<?php 
	//var_dump($_FILES);
	/*
	* 文件上传函数
	* @param string $field 表单中文件上传域的name属性值
	* @param string $dir    文件上传成功后的存放目录
	* @param array $type  允许上传的文件主类型 image text application
	* @param int 	   $size   允许上传的文件大小
	* @ return  文件上传成功返回文件名，否则返回false
	*/
	function upload($field='myfile',$dir='./uploads/',$type=array('image','text'),$size=10485760) {
		//1.判断错误
		if ($_FILES[$field]['error'] > 0) {
			switch($_FILES[$field]['error']) {
				case 1:
					echo '上传的文件超过了php.ini中 upload_max_filesize选项限制的值';
					break;
				case 2:
					echo '上传文件的大小超过了HTML表单中 MAX_FILE_SIZE选项指定的值';
					break;
				case 3:
					echo '文件只有部分被上传';
					break;
				case 4:
					echo '没有文件被上传';
					break;
				case 6:
					echo '找不到临时目录';
					break;
				case 7:
					echo '写入文件失败！';
					break;
			}
			return false;//一旦出错，到这终止。return 之后的代码不会再执行。
		}

		//由自己来限制上传文件的大小
		$allow_size = $size;
		if($_FILES[$field]['size'] > $allow_size) {
			echo '文件过大';
			return false;
		}

		//对上传的文件做限制
		$allowType = $type;

		//获取到上传文件的主类型
		list($mainType) = explode('/',$_FILES[$field]['type']);

		if(!in_array($mainType,$allowType)){
			echo '文件类型不合法！';
			return false;
		}
		//不同图片类型有不同的图片后缀
		//从原图片名获取图片后缀
		$ext = pathinfo($_FILES[$field]['name'],PATHINFO_EXTENSION);

		//产生新文件名
		$newName= date('Ymd').uniqid().'.'.$ext;

		//拼接完整的保存目录
		$dir = rtrim($dir,'/').'/'.date('Y/m/d');

		//检测文件存放目录是否存在
		if(!file_exists($dir)){
			mkdir($dir,0777,true);
		}
		//拼接完整的保存路径
		$filePath = $dir.$newName;
		//移动上传文件
		if(move_uploaded_file($_FILES[$field]['tmp_name'],$dir)) {
			//返回文件名
			return $newName;
		}
		return false;
	}
	


