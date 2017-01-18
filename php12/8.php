<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/*
	 * 新建目录 和 删除目录
	 mkdir() 新建目录
	 	参1 要新建的目录
	 	参2 模式，指定权限0777
	 	参3 是否允许嵌套路径 true
	 rmdir() 删除目录
	 	不能删除非空目录！！！
	 */
	 	sleep(3);//延缓执行
	 	var_dump(mkdir('test'));
	 	sleep(3);
	 	var_dump(rmdir('test'));

	 	echo '<hr>';
	 	var_dump(mkdir('./1/2/3/4/5',0777,true));
	 	var_dump(rmdir('./1'));