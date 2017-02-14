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
	//标准写法
			if(true) {
				echo '111111';
				echo '222222';
			}
			echo '<hr>';

			//替代
			if(false):

			echo '0000000';
			echo '5555555';

			endif;
			echo '<hr>';
			//单一条件分支 可以省略{} :endif 但是它只能控制if以下一行代码
			if(false);echo '哈哈';
			echo '小黑';

