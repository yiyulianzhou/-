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

	var_dump() 打印变量的信息
	*/
	$a = 123456;
	echo $a;
	echo '<hr/>';
	echo isset($a);
	var_dump(isset($a));

	echo '<hr>';
	unset($a);//将变量从内存中释放掉

	var_dump(isset($a));
	echo $a;
	echo '<hr>';
	$b = null;
	var_dump(isset($b));
