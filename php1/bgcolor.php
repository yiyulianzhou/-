<!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php $color = empty($_GET['c'])?'fff':$_GET['c'];?>
<body bgcolor="#<?php echo $color;?>">
	<a href="./bgcolor.php?c=f66">红一个</a>
	<a href="./bgcolor.php?c=6f6">绿一个</a>
	<a href="./bgcolor.php?c=afeee">蓝一个</a>

</body>
</html>