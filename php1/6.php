<?php
	header("Content-type:text/html;charset=utf-8");
	/*
	变量的引用赋值
		要使用引用赋值，就在被引用的变量前加入&
		unset()
	*/
		$a = 10;//变量自己开辟新的存储空间
		$b = $a;//只是将$a的值赋值给$b;
		$b = 123;//变量自己开辟新的存储空间

		echo $a;
		echo '<br>';
		echo $b;

		echo '<hr>';

		$a = 10;
		$b = &$a;//引用赋值，变量指向同一个内存空间($a和$b使用的是同一个空间地址)
		$b = 123;

		echo $a;
		echo '<br>';
		echo $b;

		echo '<hr>';
		unset($a);
		//unset($b);
		echo $b;

