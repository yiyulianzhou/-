<?php
	header("Content-type:text/html;charset=utf-8");
	/*
	变量的8中类型
		标量：布尔型 bool / 整型 int /浮点型 float / 字符串 string
		复合类型：数组 array / 对象 object
		特殊类型：资源 resource / 空 null
	*/

		echo '<pre>';
			var_dump(true);
			var_dump(0);
			var_dump(0.3);
			var_dump('i love you !!');
			var_dump(array());
			var_dump(new Exception());
			var_dump(fopen('./cmd.php','r'));
			var_dump(null);
		echo '</pre>';

