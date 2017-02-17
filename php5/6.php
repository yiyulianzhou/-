<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	php 变量的生效范围
	局部变量
		在函数内部声明的变量，叫做局部变量
		内部变量/私有变量
		函数执行完成之后，局部变量都会被释放掉
	全局变量
		在函数体外定义的变量，叫做全局变量

		函数外不能直接使用局部变量
		函数内不能直接使用全局变量
	*/
	$pp = 456789;

	function sum($a) {
		$b = 10;
		echo $a + $b;
		echo $pp;
	}
	$a = 20;
	sum($a);

	var_dump(isset($b));
	var_dump(isset($a));
