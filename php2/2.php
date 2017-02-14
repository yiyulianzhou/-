<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
		浮点数
		小数 用于表示金钱值、时间值、长度值等

	*/
		var_dump(0.5);
		var_dump(1/3);
		var_dump(2/3);
		$a = 1.8888888888888888888888888;
		var_dump($a);//精度到14位
		//科学计数法
		var_dump(3E+4);
		var_dump(3E-4);

		//浮点数也有上限
		var_dump(1.7E308);
		var_dump(1.7E309);
 ?>