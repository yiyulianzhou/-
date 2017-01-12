<?php 
	header("Content-type:text/html;charset=utf-8");
	echo '<pre>';
		print_r($_GET); //接收以get方式传过来的数据
	echo '<pre/>';

	echo '<pre>';
		print_r($_POST);//接收以post方式传过来的数据
	echo '<pre/>';

	echo '<pre>';
		print_r($_FILES);//接收以POST传递过来的文件信息
	echo '<pre/>';

