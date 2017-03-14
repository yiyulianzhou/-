<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	
	/*
	is_dir() 判断是否是目录
	is_file() 判断是否是文件
	*/
	/**
	 * [mydir 递归遍历目录]
	 * @param string $dir [要遍历的目录]
	 * @return 遍历结果
	 */
	function mydir($dir){
		//判断目录是否合法
		if(!file_exists($dir)) {
			echo '目录或文件不合法！';
			return false;
		}
		//打开目录
		$handle = opendir($dir);
		//遍历目录
		static $str = '';
		while(false !== ($filename = readdir($handle))){
			if($filename == '.' || $filename == '..') {
				continue;
			}
			//拼接一个路径
			$filepath = rtrim($dir,'/').'/'.$filename;

			//判断的是否是目录
			if(is_dir($filepath)){
				//如果是目录,就递归调用
				mydir($filepath);
			}
			//判断是文件
			if(is_file($filepath)){
				//如果是发文件就获取相关信息
				$str .='<tr>';
				$str .='<td>'.$filename.'</td>';
				$str .='<td>'.getsize(filesize($filepath)).'</td>';
				$str .='<td>'.(filetype($filepath)=='dir'?'目录':'文件').'</td>';
				$str .='<td>'.date('Y-m-d H:i:s',filectime($filepath)).'</td>';
				$str .='<td>'.(is_readable($filepath)==1?'YES':'NO').'</td>';
				$str .='</tr>';
			}
		}

		//关闭目录
		closedir($handle);
		return $str;
	}

	echo '<table border="1" align="center" cellspacing="0">';
	echo '<tr>';
	echo '<th>文件名</th>';
	echo '<th>文件大小</th>';
	echo '<th>目录/文件</th>';
	echo '<th>创建时间</th>';
	echo '<th>可读否</th>';
	echo '</tr>';

	echo mydir('./apache/');
	echo '</table>';
