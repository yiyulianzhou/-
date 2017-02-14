<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
		定界符
		1.它的特点和双引号一致。
		语法：以<<<开头，之后提供一个标示符（自定义）
		然后是提供要定义的字符串内容，最后是结束的标示符。
		!(标示符要独占一行，其不能带有空格和其他字符)
	*/
		$str =<<<ppp
123
ppp;
	echo $str;