<?php 
	header("content-type:text/html;charset=utf-8");

	/**
	 * fgets() 读取一行 参2可指定读取本行的长度
	 * fgetc() 读取一个字节
	 * feof() 测试文件指针是否到了文件结束的位置
	 * EOF 字符End Of File
	 */
	
	$file = './test.txt';

	$handle = fopen($file,'r');

	echo fgets($handle);//每次只读取一行的内容，包括空行
	echo fgetc($handle);//每次只读取一个字节
	echo fgetc($handle);//每次只读取一个字节
	echo fgetc($handle);//每次只读取一个字节
	echo fgetc($handle);//每次只读取一个字节

	while(!feof($handle)){
		$str = fgets($handle);
		echo nl2br($str);
	}
	fclose($handle);

	echo nl2br($str);
