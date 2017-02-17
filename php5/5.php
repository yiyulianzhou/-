<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	判断函数是否存在
		function_exists()
		函数存在返回真，否则返回假
		参数(函数的名字) 必须以字串的形式填入
	*/
	var_dump(function_exists('sum'));
	var_dump(function_exists('md5'));
	var_dump(function_exists('shuffle'));

	if(function_exists('sum')) {
		sum(5,5);
	} else {
		//方案B
	}

	function sum() {
		return 111;
	}

	echo '<pre>';
		print_r(get_defined_functions());
	echo '</pre>';
