<?php
	header("Content-type:text/html;charset=utf-8");
	/*
	关于变量的三个函数
	unset() 删除变量
	isset() 判断一个变量是否存在
		存在返回true 不存在返回false
		当变量被unset()掉，返回false
		当变量被赋值为null的时候，也会返回false
	empty() 判断一个变量是否为空
		为空返回true 不为空返回false
		'' 0 '0' false null array()
		空零假皆返回true,其他情况返回false

	var_dump() 打印变量的信息
	*/
	$a = '';
	$a = 0;
	$a ='0';
	$a = false;
	$a =null;
	$a = array();
	$a = 123;
	var_dump(empty($a));
	echo '<hr>';
	var_dump(isset($a));

