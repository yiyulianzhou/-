<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
	 php 		流程控制
	 	顺序结构
	 		一条路走到黑，多米诺骨牌
	 	 	1234567步
	 	分支结构
	 		岔路选择：选择WC
	 	循环结构
	 		再来一罐，左右腿走路 	
		 
	*/
	 /*
	 	分支结构
			单一条件分支
			if(表达式){代码块}
			当表达式为true时，则执行代码块里的内容

			双向条件分支
			多向条件分支
			巢状条件分支

	*/
	$a = 110;
	if($a % 2 == 0){
		echo '是偶数!!';
	}else{
		echo '是奇数!!';
	}
	echo '<hr>';
	$a = 10;
	$b = 22;
	if($a < $b):
		echo '$a='.$a;
		echo '$b='.$b;
		echo '--------------$a小';
	else:
		echo '$a='.$a;
		echo '$b='.$b;
		echo '--------------$a大';
	endif;
