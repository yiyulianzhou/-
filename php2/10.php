<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 判断变量类型
	 is_bool() //是否是布尔值
	 is_int() is_integer() is_long() //是否是整型
	 is_float() is_double() is_real() //是否是浮点
	 is_string() //是否是字串
	 is_array() //是否是数组
	 is_object() //是否是对象
	 is_resource()//是否是资源
	 is_null() //是否是null
	 is_scalar() //是否是标量
	 is_numeric() //是否是任意类型的数字或字串串数字
	 */
	 $a = 123.455;
	 if(is_numeric($a)){
	 	echo '是数字';
	 }else{
	 	echo '呵呵';
	 }
	 echo '<hr>';
	 //获取数据类型
	 echo gettype($a);

