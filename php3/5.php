<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 php 	运算符
			按操作数来区分：1/2/3元
			按功能区分：
				逻辑运算符
				&& and 逻辑与 两边为真，即为真，否则为假
				|| or  逻辑或 两边为假，即为假，否则为真
				!  not 逻辑非 把真变成假，假变成真(取反)
				   xor 逻辑异或 两边不同才算真爱，相同就是假
				位运算符
				其他运算符
	 */
	// && 与
	var_dump(true && true);//true
	var_dump(true && false);//false
	var_dump(false && true);//false
	var_dump(false && false);//false
	echo '<hr>';
	// || 或 
	var_dump(true || true);
	var_dump(true || false);//true
	var_dump(false || true);
	var_dump(false || false);
	echo '<hr>';

	//!非
	var_dump(!true);//false
	var_dump(!false);//true
	
	echo '<hr>';
	//&& 和 || 的短路问题
	//当 && 的左边为false时，发生短路，右边不执行
	//当 || 的左边为true时，发生短路，右边不执行
	$a = 1;
	if($a ==2 && $d=100){
		echo 'true区间';
	}
	var_dump(isset($d));

	$c=1;
	if($c ==1 || $d = 100){
		echo 'true区间';
	}
	var_dump(isset($d));
	echo '<hr>';
	$a = '5';
	//$a = 5;
	//不是整型就不+1(短路的应用)
	is_int($a) && $a +=10;
	var_dump($a);

