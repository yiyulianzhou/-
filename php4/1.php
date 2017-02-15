<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 * 多向条件分支
	 	1.用多个表达式作为条件判断
	 	if(表达式1){
			代码块1
	 	}else(表达式2){
			代码块2
	 	}elseif(表达式3){
	
	 	}else{
		
	 	}
	 	2.只对一个表达式进行条件判断
	 	巢状条件分支
	 */
	 	//每个表达式是排斥关系，只有一个会被执行
	 	//条件范围小的值 往前放

	 	$age = 10;
	 	if($age <= 28){
	 		echo '青年';

	 	}elseif($age <=18){
	 		echo '骚年';
	 	}elseif ($age <=12){
	 		echo '儿童';
	 	}else{
	 		echo '青年以上';
	 	}