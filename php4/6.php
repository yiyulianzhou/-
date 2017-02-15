<?php 
	header("Content-type:text/html;charset=utf-8");

	echo '<table border="1" width="800" align="center" cellspacing="0">';
	echo '<caption>10 X 10 表格</caption>';
	$i = 0;
	//输出行
	while($i < 10){
		//产生颜色，双数行用#abcdef,单数行用#ff0
		$color = $i%2==0?'#abcdef':'#ff0';
		//生成的颜色放入tr
		echo '<tr bgcolor="'.$color.'">';
		$j=0;
		//输出单元格(列)
		while($j < 10){
			//$i 行号
			//$j 列号
			echo '<td>'.($i*10+$j).'</td>';
			$j++;
		}
		echo '</tr>';
		$i++;
	}
	echo '</table>';
	
	 		
