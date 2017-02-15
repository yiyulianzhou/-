<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 特殊流程控制 控制语句
	 	break;
	 	遇到break;直接结束当前的循环
	 	exit;die();
	 	终止当前脚本运行，并可以输出一条信息

	 	continue 只能用在循环结构中
	 		遇到continue，立即跳出本次循环，进行下一循环
	 */
	 for ($i=0;$i < 20; $i ++) {
	 	if ($i ==5) {
	 		break;
	 	}
	 	echo $i.'/';
	 }
	 echo '<hr>';
	 for ($i = 0; $i < 20; $i++) {
	 	if($i == 5) {
	 		continue;
	 		echo 111;
	 	}
	 	echo $i.'/';
	 }

	 echo '<hr>';
	 echo '111111';
	 echo '<br>';
	 echo '222222';
	 echo '<br>';
	 echo '333333';
	 //exit;
	 //die('啊......');
	 echo '<br>';
	 echo '44444444';
	 echo '111111111';
	 		
