<?php
	header("Content-type:text/html;charset=utf-8");

	for($i = 1,$j = 1;$i <= 9; $j++) {
		echo "{$i}X{$j}=".($i*$j).'&nbsp;&nbsp;&nbsp;';
		if($i == $j) {
			$i++;
			$j=0;
			echo '<br />';
		}
	}