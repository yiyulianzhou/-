<?php 
	//var_dump($_FILES);
	//调用上传处理函数
	$upfile = up();
	var_dump($upfile);
	function up() {
		//1.先判断有无上传文件信息
		if (empty($_FILES)) {
 		echo "可能设置错误<br>请检查表单设置或php.ini内post设置";
 		return false;
 	}
 		//2.接收上传上来的文件名
 		$filename = $_FILES['myfile']['name'];
 		$tmpname = $_FILES['myfile']['tmp_name'];

 		//3.移动上传文件到指定目录
 		if(move_uploaded_file($tmpname,$filename)) {
 			echo "上传文件成功！<br>";
 		} else {
 			echo "上传文件失败<br>";
 			return false;
 		}

	}


