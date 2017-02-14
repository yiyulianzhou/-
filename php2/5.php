<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
		双引号
		1.双引号可以解析变量
		2.双引号不能包含双引号，需要显示双引号的话，用转义字符
		3.双引号可以转义任何字符。
		4.单双引号可以互插
	*/
	$name = '王鑫';
	$str = "我的名字叫做$name";//解析变量
	echo $str;
	echo '<hr>';
	// $str1 = '我们的目标是把客户'睡'服';//单引号不可嵌套使用
 
	$str1 = "我们的\t目标\n是把客户\"睡\"服";//
	echo $str1;
	echo '<hr>';

	$str2 = "\\";
	echo $str2;
		

 ?>