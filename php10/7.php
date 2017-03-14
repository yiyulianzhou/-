<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/*
	递归统计目录大小
	*/
	echo getsize(dirsize('./apache'));

	/**
	 * [dirsize 统计目录大小]
	 * @param string $dir[要统计的目录]
	 * @param 统计好的大小值
	 */
	function dirsize($dir) {
		if(!is_dir($dir)) {
			echo '这不是一个有效的目录';
			return false;
		}

		//从0 开始统计
		$size =0 ;
		//打开目录
		$handle = opendir($dir);
		while(false !== ($filename=readdir($handle))){
			if($filename == '.' || $filename== '..'){
				continue;
			}
			//拼接完整路径
			$filepath = rtrim($dir,'/').'/'.$filename;
			if(is_dir($filepath)){
				//递归调用,并累加大小
				$size += dirsize($filepath);

			}
			if(is_file($filepath)){
				//累加文件大小
				$size +=filesize($filepath);
			}
		}
		//关闭目录资源
		closedir($handle);
		//返回统计好的大小
		return $size;
	}