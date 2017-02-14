<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
		字符串
		一串字符
	*/
		//三种声明方式
		//1.单引号
		$str1 = 'abcdef';
		//2.双引号
		$str2 = "人生啊人生，无奈啊无奈...";
		//3.定界符
		$str3 =<<<abc
adlfjaldjflajfdlajflkaj
abc;
		var_dump($str1);
		var_dump($str2);
		var_dump($str3);
 ?>