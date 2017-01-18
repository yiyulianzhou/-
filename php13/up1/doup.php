<?php
	echo '<pre>';
		print_r($_FILES);
	echo '</pre>';

	//判断有没有文件上传信息
	if (empty($_FILES)) {
		echo '请检查表单或者php.ini配置';
		exit;
	}

	//接收上传上来的两个文件名
	$fileName = $_FILES['myfile']['name'];
	$tmpName = $_FILES['myfile']['tmp_name'];

	//移动文件到保存目录
	if (move_uploaded_file($tmpName,'./uploads/'.$fileName)) {
		echo '上传成功<br />';
		echo $fileName;
	} else {
		echo '上传失败！';
		exit;
	}
