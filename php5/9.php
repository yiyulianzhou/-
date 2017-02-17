<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	声明和应用各种形式的PHP函数
	使用一个函数，需要了解三点
		1.函数的功能
		2.函数的参数
		3.函数的返回值

	参数或返回值的类型说明：
		bool 布尔型
		int  整型
		float 浮点
		string 字符串
		array  数组
		resource 资源
		void   无参数
		mixed   可接受不同类型
		number 接受整型或浮点
		callback 参数必须是一个函数名
		*/
		//1.常规参数的函数
		//就是参数要传递指定的数量和类型
		$str = 'abcdefg0123456789';
		echo '<p>-----------翻转前----------</p>';
		echo $str;
		echo '<p>-----------翻转后----------</p>';
		echo strrev($str);//英文

		echo '<hr>';
		echo strlen($str);
		echo strlen(array(1,2,3));
		echo '<hr>';
		echo array_sum($str);
		echo array_sum(array(1,2,3));
		echo '<hr>';

		echo max(array(55,556));

		//2.伪类型参数的函数
		//mixed 可接受不同类型
		//php是弱类型语言