<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 * 整型 
	 就是整数 0 1 3 -1
	 */
	 //整型的声明
	 //以十进制来声明
	 var_dump(1);
	 var_dump(0);
	 var_dump(-1);

	 //以二进制
	 var_dump(0b1000);
	 var_dump(0b10);
	 echo '<hr>';

	//以八进制
	 var_dump(057);
	 var_dump(010);
	 echo '<hr>';

	 //十六进制
	 var_dump(0x2f);
	 var_dump(0xff);

	 //格式化输出字符串
	 //printf();
	 printf('%b',47);//2
	 echo '<br />';

	 printf('%o',47);//8
	 echo '<br />';

	 printf('%x',47);//8
	 echo '<hr>';

	 //php整型的不是范围
	 //2147483647

	 var_dump(2147483648);
	 var_dump(PHP_INT_MAX);
 ?>