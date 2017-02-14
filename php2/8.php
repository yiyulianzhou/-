<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 数据类型的转换
	 	自动转换/强制转换

	 	自动转换
	 		通常发生在标量之间，并且是在运算时发生
	 */
	 //布尔型 与 null --> 整型
	 	echo true + 100;//true 1
	 	echo '<br />';
	 	echo false + 100;//false 0
	 	echo '<br />';
	 	echo null + 100;//null 0
	 	echo '<hr>';

	 	//字串 --> 数值
	 	//从字串的第一位开始，遇到非数值的类型就停止
	 	//如果该字符串以合法的数值开始，则使用该值，否则值为0
	 	echo '123' + 123;//字符串123
	 	echo '<br />';
	 	echo 'hehe' + 100;//字串 0 
	 	echo '<br />';
	 	echo '123hehe' + 100;//字串123
	 	echo '<br />';
	 	echo '123.456hehe' + 100;//字串123.456
	 	echo '<br />';
	 	echo '0xff' + 100;//16进制转换为255
	 	echo '<br />';
	 	echo '057' + 100;//不能转换8进制
	 	echo '<br />';
	 	echo '0b1000' + 100;//不能转换二进制 0
	 	echo '<br />';
	 	echo 'hehe123' + 100;//0
	 	echo '<br />';
	 	echo '123.456.789' + 100;




