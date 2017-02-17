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
	*/
		echo sum(99);
		echo sum(100);
		function sum($a,$b=5) {
			return $a + $b;
			echo '11111';
		}

		function mod($a,$b){
			return $a = 55;
		}
		var_dump(mod(5,9));
	
