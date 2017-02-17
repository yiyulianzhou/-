<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	如何声明函数
	function 函数名(形参列表) {
		函数体/代码块
		return 返回值
	}
	{} 函数体/返回值
	函数体：任何有效的PHP代码
	返回值：
		1.用return关键字，用来将函数调用执行的结果返回到调用处。
		2.如果函数，没有返回值，那么调用这个函数后，返回null
		3.return 之后的代码，都不会被执行。

	echo 和 return 的区别
		return 是将函数的执行结果返回到调用处
		echo 只是在函数调用时将执行结果输出到页面
		要想得到函数的执行结果，就必须设置return返回值
	*/
		$kk = sum(10,20);
		var_dump($kk);
		echo '<hr>';
		$ll = mod(10,20);
		var_dump($ll);

		function sum($a,$b){
			return $a + $b;
		}
		function mod($a,$b){
			echo $a+ $b;
		}
	
