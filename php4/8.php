<?php 
	header("Content-type:text/html;charset=utf-8");

	echo '<table border="1" width="800" align="center" cellspacing="0">';
	echo '<caption>单层while 10 X 10 隔行变色 表格</caption>';
	$i = 0;
	//输出行
	while($i < 100){
		//产生颜色每隔20个td就是两行
		$color = $i%20==0?'#abcdef':'#ff0';
		if($i%10 == 0){
			echo '<tr bgcolor="'.$color.'">';
		}
		
			echo '<td>'.$i.'</td>';
		if($i%10 == 9){
			echo '</tr>';
		}
		
		$i++;
	}
	echo '</table>';

	echo '<hr>';
	echo '<table border="1" width="800" align="center" cellspacing="0">';
	echo '<caption>单层while 10 X 10 隔列变色 表格</caption>';
	$i = 0;
	while($i < 100){
		//单数单元格一种颜色，双数单元格一种颜色
		$color = $i%2==0?'#abcdef':'#ff0';
		if($i%10 == 0){
			echo '<tr>';
		}
		echo '<td  bgcolor="'.$color.'">'.$i.'</td>';
		if($i%10 == 9){
			echo '</tr>';
		}
		$i++;
	}
	echo '</table>';
	
	 		
