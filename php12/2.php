<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 * file() 以数组的形式读取文件内容，每一行是一个数组单元，不管行有没有内容
	 * readfile() 读取内容，并输出到浏览器(将文件内容交给浏览器)
	 * ftruncate() 将文件截取到指定长度
	 */
	$file ='./test.txt';

	$handle = fopen($file,'a');

	echo '<pre>';
		//print_r(file($file));
	echo '<pre/>';

	echo '<pre>';
		//readfile($file);
	echo '<pre/>';

	//此处禁止使用作业文件作为测试
	var_dump(ftruncate($handle,9));

	fclose($handle);