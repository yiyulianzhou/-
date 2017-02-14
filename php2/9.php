<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 数据类型的转换
	 强制转换：
	 1.使用括号加目标类型 进行转换，当次生效
	 (bool)(int)(float)(string)
	 (array)(object)
	 2.使用类型函数转换，当次生效
	 intval()
	 floatval()
	 strval()
	 3.settype() 转换类型，永久生效
	 	参1：要转换类型的变量
	 	参2：
	 	"bool" "int" "float" "string"
	 	"array" "object" "null"
	 */
	 	$a = '123';
	 	var_dump($a);
	 	var_dump((int)$a);
	 	var_dump($a);
	 	echo '<hr>';
	 	var_dump(intval($a));
	 	var_dump($a);
	 	echo '<hr>';
	 	var_dump($a);
	 	settype($a,'float');
	 	var_dump($a);
	 	var_dump($a);
	 	var_dump($a);
	 	var_dump($a);



