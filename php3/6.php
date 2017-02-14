<?php 
	header("Content-type:text/html;charset=gbk");
	/**
	 php 	运算符
			按操作数来区分：1/2/3元
			按功能区分：
				其他运算符
				?: 三元运算符
				`` 执行运算符(反引号)
				@ 错误抑制符(只对表达式有效)
				  不建议使用，有错误必须解决
				=>/->/instanceof
	 */

	$name = isset($_GET['a'])?$_GET['a']:'马达';
	echo $name.'是我的名字';

	echo '<pre>';
		//echo `tree d:/wamp`;

		echo '<hr>';
		echo @$a;
		@is_init();
	

