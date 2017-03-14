<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';

	/*
	路径问题
	路径分隔符：
		UNIX / 只识别正斜线
		WINDOWS / \ 识别正反斜线
	使用 以下路径分隔符：(这是一个常量)
		DIRECTORY_SEPARATOR
	*/
		echo 'D:'.DIRECTORY_SEPARATOR.'wamp'.DIRECTORY_SEPARATOR.'www'.DIRECTORY_SEPARATOR.'lesson'.DIRECTORY_SEPARATOR.'php12';