<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 php 	运算符
			按操作数来区分：1/2/3元
			按功能区分：
				字符串运算符
					.
				赋值运算符
				比较运算符
				逻辑运算符
				位运算符
				其他运算符
	 */
	//1.两个字串连接
	echo '我和你'.'心连心';
	echo '<hr>';

	//2.变量和字串一起输出
	$name = '李斌';
	echo '我的名字是'.$name;
	echo '<hr>';

	//3.变量和变量一期输出
	$str1 = "一小学生趁着游戏更新拿出作业认真的写着";
	$str2 = "我等惭愧啊！当我问孩子，为何如此认真？在网吧也不忘写作业？";
	$str3 = "孩子说：时间是挤出来的！挤挤不就有了吗？";
	$str4 = "孩子的话打动了在场的网民，掌声经久不息";
	echo $str1.$str2.$str3.$str4;

	echo '<hr>';
	$url = 'http://www.acfun.tv';
	echo '<a href="'.$url.'">ACFUN</a>';

	echo '<hr>';
	$a = 123456;
	$b = false;
	echo $a.$b.'快乐的小2B';