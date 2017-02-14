<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 php 	运算符
			按操作数来区分：1/2/3元
			按功能区分：
				比较运算符
				>
				<
				>=
				<=
				== 等于(值相等)，不会进行类型判断
				!= 或 <> 不等于(值不相等)，不会进行类型判断
				!== 不全等(值或类型不相同)
				逻辑运算符
				位运算符
				其他运算符
	 */
	$a = 0;
	var_dump($a > 0);
	var_dump($a = 0);
	var_dump($a == 0);
	var_dump($a == '0');
	echo '<hr>';
	var_dump($a === 0);

	echo '<hr>';
	var_dump($a != 0);
	var_dump($a != 1);
	var_dump($a !== '0');