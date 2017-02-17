<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	函数
	What 什么是函数?
		就相当于一个功能
	Why  为什么要学函数?
		1.提高代码的重用性
		2.提高开发效率
		3.利于代码的维护
	Where 哪能用到函数?
		程序中处处用到......
	How 如何使用函数
		1.自定义函数
		2.系统函数

	如何声明函数
	function 函数名(形参列表)
	{
		函数体/代码块
		return 返回值
	}
	如何调用函数
	函数名(实参列表);
	1.不管是自定义函数还是系统函数，不调用不执行。
	2.函数可以在任意处调用，不管是函数前 还是函数后，甚至函数中
	3.函数在定义/调用时，函数名不区分大小写
	4.函数如果有参数，必须传递相应的参数
	5.如果函数有返回值，就可以把函数名称当做函数的返回值来使用
	*/
	echo duang(69);
	echo duang(55);
	echo DUANG(100);
	//echo DUANG();
	function duang($a) {
		if(!is_numeric($a)) {
			return '请输入合法的数字';
		}
		if($a % 2 ==0) {
			return $a.'为偶数!';
		} else {
			return $a.'为奇数!';
		}
	}

