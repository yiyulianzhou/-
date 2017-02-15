<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 计数型的循环
	 for(初始值;条件;增量){
		循环体
	 }
	 */
	 //0~9
	 for($i = 0;$i < 10;$i++){
	 	echo $i.'/';
	 }
	 echo '<hr>';
	 //5的倍数
	 for($i = 0;$i <= 100; $i+=5){
	 	if ($i != 0) {
	 		echo $i.'/';
	 	}
	 }
	 echo '<br />';
	 for($i = 100; $i > 0; $i-=5){
	 	if($i != 0){
	 		echo $i.'/';
	 	}
	 }
	 echo '<hr />';
	 // 作业：
	 //单层for 10X10隔行变色
	 //单层for 10X10割列变色
	 echo '<table border="1" width="800" align="center" cellspacing="0">';
	 echo '<caption>for 循环10 X 10 隔行变色 表格</caption>';
	 for($i=0;$i<10;$i++){
	 	$color= $i%2==0?'#abcdef':'#ff0';
	 	echo '<tr bgcolor="'.$color.'">';
	 	for($j=0;$j<10;$j++){
	 		echo '<td>'.($i*10+$j).'</td>';
	 	}
	 	echo '</tr>';
	 }
	
	 		
