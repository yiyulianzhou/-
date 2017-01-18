<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/**
	 * file_put_contents() 将字符串写入文件，文件不存在，则创建之
	 *参数1： 要写入的文件
	 *参数2： 要写入的子串，可以支持一维数组的写入(数组的值写好)
	 *参数3：可选，写入的方式FILE_APPEND(追加模式)
     *
	 *file_get_contents() 将文件内容读入到一个子串中
	 */

	 $str = "人生是很累的，你现在不累，以后会更累.<br />";

	 $arr = array(1,2,3,4,5,6);

	 var_dump(file_put_contents('./1.txt',$arr,FILE_APPEND));

	 echo '<hr/>';

	 $a = file_get_contents('./1.txt');

	 echo $a;
	 echo '<hr>';

	 $baidu = file_get_contents('http://www.php.net/manual/zh/index.php');

	 var_dump(file_put_contents('./baidu.html',$baidu));
	 
