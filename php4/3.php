<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 * 
	巢状条件分支
		就是if语句的多层嵌套
		if(表达式1){
			if(表达式2){
				代码块1
			}else{
				代码块2
			}
		}elseif(表达式3){
			if(..){......}
		}
	 */
		$sex = 0;
		$age = 29;
		if($sex == 0) {
			if($age >=18) {
				echo '美女，约吗？';
			} else {
				echo '小妹妹，你还没成年，不约不约';
			}
		} elseif($sex == 1){
			if($age >= 18){
				echo '帅哥，你好，你已经成年......';
			}
		}else{
			echo 'twoinone 你好，请别祸害大众...';
		}
	 		
