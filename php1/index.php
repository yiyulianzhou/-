<?php
	header("Content-type:text/html;charset=utf-8");
	/*
		布尔型 bool
		true  代表真
		false 代表假
		!(不可以加引号)
		!(不区分大小写)

		php里以下值被认为是false,其他值都认为是true
		 1.布尔值 false
		 2.整型的 0
		 3.浮点的 0.0
		 4.空字符串 '' "" 或 字符串'0'
		 5.空数组 array()
		 6.空对象(只适用于PHP4)
		 7.特殊类型NULL
	*/
		 var_dump(TRUE);
		 var_dump('true');
		 var_dump('false');
		 $a=111;
		 if('') {
		 	var_dump(true);
		 }else{
		 	var_dump(false);
		 }

