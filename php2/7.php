<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
	资源
	空
	null
	*/
	$img = imagecreatetruecolor(500,500);
	//var_dump($img);
	/*NULL
	表示一个变量没有任何值，为空
	不表示空格/不表示0/不表示'' ""
	不区分大小写

	以下变量被认为是null
		1.被赋值为null
		2.尚未赋值的变量
		3.被unset()掉的变量也是null
		4.调用一个没有返回值的函数，默认返回一个null
	*/
		$a = NULL;
		//var_dump($a);
		//var_dump($b);
		function sb(){
			$h= '123456789';
		}
		var_dump(sb());




