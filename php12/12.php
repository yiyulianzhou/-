<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/**
	 * 对文件的操作
	 *新建文件 touch()
	 *删除文件 unlink()
	 *复制文件 copy()
	 *剪切文件 rename()
	 *重命名文件 rename()
	 */

	 touch('test.txt');
	 touch('aaa');
	 touch('./1/b.doc');

	 unlink('test.txt');
	 unlink('aaa');
	 unlink('./1/b.doc');
	 
