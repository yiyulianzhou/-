<?php 
	header("Content-type:text/html;charset=utf-8");

	//[扩展]
	//单层for循环实现 99乘法表
	// !!! 不能用表格 &nbsp;
	//
	/*双层for \循环 实现 9X9乘法表*/
	echo '<table width="800" border="1" align="center" cellspacing="0">';
	echo '<caption>双层for循环实现 9X9 乘法表</caption>';
	for($i=1;$i<=9;$i++){
		echo '<tr>';
			for($j=1;$j<=$i;$j++){
				echo "<td>{$i}X{$j}=".$i*$j."</td>";
			}
		echo '</tr>';
	}
	echo '</table>';
	echo '<hr>';

	//反转9X9乘法表
	echo '<table border="1" width="800" align="center" cellspacing="0">';
	for($i = 9;$i >= 1;$i--){
		echo '<tr>';
		for($j = 1;$j <= $i; $j++){
			echo "<td>{$i}X{$j}=".($i*$j)."</td>";
		}
		echo '</tr>';
	}
	echo '</table>';
	
	 		
