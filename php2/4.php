<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
		单引号
		1.单引号不解析变量
		2.单引号不能包含单引号，要显示单引号的话就用转义符号。
		3.单引号的转义符只能转义单引号和它本身。
		4.如果在单引号里转义其他字符，那么整体会显示出来
	*/
		$name = '王鑫';
		$str = '我的名字叫$name';//不解析变量
		echo $str;
		echo '<hr>';
		//$str1 = '我们的目标是要把客户'睡'服';//单引号不能嵌套单引号
		$str1 = '我们的\t目标\n是要把客户\'睡\'服';
		echo $str1;		
		echo '<hr>';
		$str2 = '\\';
		echo $str2;

 ?>