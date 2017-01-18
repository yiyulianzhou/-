<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/*
	dirname() 返回路径中的目录部分
	basename() 返回路径中的文件名部分
	pathinfo() 以数组的形式返回路径中的一些信息
	*/

	echo $path ="D:/wamp/www/s47/php12/1.php";
	echo '<br>';
	echo $url = 'http://www.google.com.hk/index.php?a=111&b=222#top';
	echo '<hr/>';

	echo dirname($path);
	echo '<br>';
	echo dirname($url);
	echo '<hr />';

	echo basename($path);
	echo '<br>';

	echo basename($url);
	echo '<hr />';
	print_r(pathinfo($path));
	echo '<br />';
	print_r(pathinfo($url));

	echo '<hr />';
