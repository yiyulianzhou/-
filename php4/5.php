<?php 
	header("Content-type:text/html;charset=utf-8");

	/**
	 * 
		循环三要素
		1.循环的初始值
		2.循环的条件(不能出现无限判断，也不能只循环1次)
		3.能使循环满足的变量，增量(死循环)
		布尔型循环
		计数型循环
	 */
	$i = 1;
	while($i<=100){
		if($i % 5 == 0) {
			echo $i.'/';
		}
		$i ++;
	}
	echo '<hr>';

	$j = 0 ;
	while($j <=100) {
		if($j != 0){
			echo $j.'/';
		}
		//步长为5
		$j+=5;
	}
	echo '<hr>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<select name="year" id="">
		<option value="">请选择...</option>
		<?php $y = 2016; ?>
		<?php while($y >= 1408): ?>
			<option value="<?php echo $y?>"><?php echo $y?></option>
			<?php $y--;?>
		<?php endwhile;?>
	</select>
</body>
</html>
	
	 		
