<?php
	header("Content-type:text/html;charset=utf-8");
	/*
	可变变量
		玩文字游戏
	*/
		$a = 'love';
		$love ='呵呵哒~';

		echo $$a;

		//$a被解析成love $$a => $love

