<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 * 循环
	 	约跑：从第1圈开始跑，我们跑10圈就停。(圈数+1)
	 	循环三要素：
	 		1.循环的初始值
	 		2.循环的条件(不能出现无限循环，也不能只循环1次)
	 		3.能使循环满足的变量，增量(死循环)

	 	循环分为两种：
	 		布尔型循环
	 		1.先判断再循环
	 			while(表达式){
					代码块
	 			}
	 		2.先循环再判断（至少执行一次）
	 			do{
	
	 			}while(表达式)
	 		计数型循环

	 */
	 	$num = 1;//初始值
	 	//条件
	 	while($num <= 10){
	 		//循环体
	 		echo "我是第".$num."圈<br />";
	 		
	 		// if($num == 3){
	 		// 	$num++;
	 		// 	continue;
	 		// }
	 		//增量
	 		$num++;
	 	}
	 	echo '我是循环体外的代码';
	 	echo '<hr>';

	 	//替代写法
	 	$j = 1;
	 	while($j <= 10):
	 		echo $j.'<br>';
	 		$j++;
	 	endwhile;
	 	echo '<hr>';

	 	//初始值
	 	$i = 5;
	 	do{
	 		echo $i;
	 		//增量
	 		$i++;
	 	}while($i<1);//条件
