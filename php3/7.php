<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 php 	运算符
		运算符的优先级

	 */
		//1 + 2 * 3 =7
		//(1 + 2)*3 = 9
	//经典坑
		$a = 3;
		$b = 3;
		if($a = 5 || $b =5){
			$a++;
			$b++;
		}
		echo $a.'和'.$b;
		var_dump($a);
		var_dump($b);
		echo '<hr>';

		if(($a = 5) || ($b = 5)){
			$a++;
			$b++;
		}
		echo $a.'和'.$b;
		/**
		 运算符优先级
		 	运算符 				附加信息
		 	clone new
		 
			[]					array()
			++ -- `` int() (float) (string) (array) (object) (bool) @ 类型和递增/递减
			instanceof 			类型
			!					逻辑运算符
			* / % 				算术运算符
			+ - . 				算术运算符和字符串运算符
			<< >> 				位遇运算符
			== != === !== < > 	比较运算符
			&					位运算符和引用
			^					位运算符
			| 					位运算符
			&& 					逻辑运算符
			|| 					逻辑运算符
			?: 					三元运算符
			= += -= *= /= .= %= &= |= ^= <<= >>= => 赋值运算符
			and 				逻辑运算符
			xor 				逻辑运算符
			or 					逻辑运算符
			,					多处用到
		 
		 */

	

