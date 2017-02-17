<?php 
	header("Content-type:text/html;charset=utf-8");

	/*
	函数
	What 什么是函数？
		就相当于一个功能
	Why  为什么要学函数?
		1.提高代码的重用性
		2.提高开发效率
		3.利于代码维护

	Where

	How
	*/
	function table($rows,$cols) {
		echo '<table border="1" width="800" cellspacing="0" align="center">';
		echo '<caption>for循环'.$rows.'X'.$cols.'隔行变色 表格</caption>';
		for ($i=0;$i < $rows; $i++) {
			$color = $i%2==0?'#abcdef':'#ff0';
			echo '<tr bgcolor="'.$color.'">';
			for($j=0; $j < $cols; $j++) {
				echo '<td>'.($i*$cols + $j).'</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	table(10,10);
