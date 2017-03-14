<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 * rewind() 重置文件指针
	 * ftell() 返回文件指针读/写的位置
	 * fseek() 在文件中定位指针
	 */
	
	$file = './test.txt';

	$handle = fopen($file,'r');

	echo ftell($handle);
	echo '<br />';

	echo fgets($handle);
	echo '<br />';

	echo ftell($handle);

	echo fgets($handle);
	echo '<br />';

	echo ftell($handle);
	echo '<hr />';
	echo fseek($handle, 100,SEEK_SET);
	echo ftell($handle);
	echo fgets($handle);
	echo ftell($handle);

	echo '<hr />';
	fseek($handle, 100,SEEK_CUR);
	echo fread($handle,15);

	echo '<hr />';
	fseek($handle,-15,SEEK_END);
	echo fread($handle, 15);

	fclose($handle);
