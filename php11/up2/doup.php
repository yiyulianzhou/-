<?php
	echo '<pre>';
		print_r($_FILES);
	echo '</pre>';

	$res = upload();
	var_dump($res);
	function upload($field = 'myfile',$maxSize = '10485760',$allowType = array('image','text'),$path = './uploads/'){
		//判断有没有文件上传信息
		if (empty($_FILES)) {
			echo '请检查表单或者php.ini配置';
			return false;
		}

		//接收上传上来的两个文件名
		$fileName = $_FILES[$field]['name'];
		$tmpName = $_FILES[$field]['tmp_name'];
		$size = $_FILES[$field]['size'];
		$type = $_FILES[$field]['type'];
		$error = $_FILES[$field]['error'];

		//判断错误
		if($error > 0) {
			switch ($error) {
				case '1':
					echo '上传文件大小超过了php.ini中upload_max_filesize限制的最大值';
					break;
				case '2':
					echo '上传文件大小超过了表单中MAX_FILE_SIZE限制的最大值';
					break;
				case '3':
					echo '文件只有部分被上传';
					break;
				case '4':
					echo '没有文件被上传';
					break;
				case '6':
					echo '找不到临时目录';
					break;
				case '7':
					echo '写入文件失败';
					break;
				default:
					echo '未知错误';
					break;
			}
			return false;
		}
		//自己限制上传文件大小
		if ($size > $maxSize) {
			echo '上传文件过大';
			return false;
		}

		//限制上传文件类型
		list($mainType) = explode('/',$type);
		if(!in_array($mainType,$allowType)){
			echo '文件类型不合法！<br />';
			return false;
		}
		//产生新文件名
		$ext = pathinfo($fileName,PATHINFO_EXTENSION);
		$newName = date('Y-m-d').uniqid().'.'.$ext;
		//根据日期创建保存目录
		$newPath = rtrim($path,'/').'/'.date('Y/m/d/');

		///检测目录是否存在
		if(!file_exists($newPath)){
			mkdir($newPath,0777,true);
		}
		//拼接完整的保存路径
		$savePath = $newPath.$newName;
		//移动文件到保存目录
		if (move_uploaded_file($tmpName,$savePath)) {
			echo '上传成功<br />';
			return $newName;
		} else {
			echo '上传失败！';
			return false;
		}
	}
	
