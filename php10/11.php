<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/**
	 * 剪切目录
	 *rename() 重命名一个文件或目录，还可以进行剪切
	 *!(注意在linux下的权限问题)
	 */
	 var_dump(rename('./haha.jpg','xixi.jpg'));

	 var_dump(rename('./qq','./xixi'));

	 var_dump(rename('./6.jpg','../999.jpg'));

	 var_dump(rename('./xixi','../qq'));
