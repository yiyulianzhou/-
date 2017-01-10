<?php
	include './function.php';
	$field = 'myfile';
	$maxSize = 10485760;
	$allowType = array('image','text');
	$path = './uploads/';
	echo '<pre>';
		print_r($_FILES);
	echo '</pre>';

	$res = upload($field,$maxSize,$allowType,$path);
	var_dump($res);

	//判断上传是否成功
	if($res) {
		$path .= substr($res,0,4).'/';//2017
		$path .= substr($res,4,2).'/';//01
		$path .= substr($res,6,2).'/';//10
		$imgpath = $path.$res;
		echo '<img src="'.$imgpath.'" width="300"/>';
	} else {
		echo '上传失败';
	}
	
	
