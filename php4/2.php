<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 * 多向条件分支
	 	1.用多个表达式作为条件判断
	 	2.只对一个表达式进行条件判断
	 	switch(表达式){
			case 值1:
				break;
			case 值2:
				break;
			case 值3:
				break;
			default:
				break;

	 	}
	 	巢状条件分支
	 */
	 	$type = 1;
	 	//判断表达式
	 	switch($type) {	
	 		//值可以是字符串或整型
	 		case 1:
	 			echo 'system admin';
	 			//退出switch语句
	 			break;
	 		case 2:
	 			echo '管理员';
	 			break;
	 		case 3:
	 			echo '会员';
	 			break;
	 		//如果以上值都不匹配，那么就选择此区间(可以省略)
	 		default:
	 			echo '游客';
	 			break;
	 	}

	 	echo '<hr>';
	 	//switch 里的case区间遇到break才跳出switch
	 	$num = mt_rand(1,9);
	 	switch($num) {
	 		case 1:
	 			echo '恭喜您，中了一等奖';
	 			break;
	 		case 2:
	 		case 3:
	 		case 4:
	 			echo '恭喜您，中了二等奖';
	 			break;
	 		default:
	 			echo '很遗憾，您木有中奖';
	 			break;
	 	}