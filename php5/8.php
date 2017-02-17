<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	静态变量
		在函数执行完之后，还想要保留上一次执行里变量值的结果
		1.使用static关键字 标识为静态变量
		2.标识为静态变量的变量的变量，会在函数的一次或多次调用之间保留其值
		即，在函数再次执行时，会使用前一次的结果进行运算
		3.值会保留到脚本结束
	动态变量
	*/
	function test() {
		static $a = 0 ;
		$b = 0;
		$a++;
		$b++;
		echo $a.'------'.$b.'<br>';
	}
	test();
	test();
	test();
	test();
	test();
	
