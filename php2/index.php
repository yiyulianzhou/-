<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 常量
	 	就是固定不变的量 身份证/圆周率

	 定义语法：
	 	define('常量名','常量值','是否区分大小写');
	 	常量值只能是标量
	 	可选参数，默认是false:区分大小写 true：不区分
	 	常量名用大写

	 	常量一旦被定义，不能再次更改或重复定义
	 	常量名不能以$开头
	 	调用一个未定义的常量，常量名会被当成字串输出(会报错)
	 	*/
	 	define('YZL','3.14');

	 	echo 'YZL';

	 	//echo define('YZL','3.1415926');

	 	//5.3之后
	 	const DD = '屌丝节';
	 	echo DD;
	 	//const DD = '屌丝节1111';

	 	//判断一个常量是否存在
	 	var_dump(defined('YZL'));

	 	//魔术常量
	 	echo __FILE__;
	 	echo '<br>';
	 	echo __LINE__;
	 	echo '<br>';
	 	echo M_PI;
	 	echo '<br>';
	 	echo ASSERT_BAIL;

	 	echo '<pre>';
	 	print_r(get_defined_constants(true));


