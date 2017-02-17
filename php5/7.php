<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	php 变量的生效范围

		函数外不能直接使用局部变量
		函数内不能直接使用全局变量

		非要在内部使用全局变量
		非要在外部使用局部变量
	*/
	$a = '我是全局变量';
	echo '<pre>';
		//print_r($GLOBALS);
	echo '<pre/>';

	function sum() {
		global $a,$b;
		echo $a;
		$b = '我是局部变量';
		//$GLOBALS['b'] = $b;
	}
	sum();

	echo '<pre>';
		print_r($GLOBALS);
	echo '<pre/>';
	echo $b;
	
