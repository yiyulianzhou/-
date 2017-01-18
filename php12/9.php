<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/**
	 * 递归删除目录
	 */
	/**
	 * [deldir 递归删除目录]
	 * @param string $dir [要删除的目录]
	 * @return 删除成功返回true 失败返回false
	 */
	function deldir($dir) {
		if(!is_dir($dir)){
			echo '请提供有效的目录';
			return false;
		}
		$handle = opendir($dir);
		while(false !== ($filename=readdir($handle))){
			//ERROR 级别的提示：一定要排除.和..目录
			if($filename == '.' || $filename == '..'){
				continue;
			}
			//拼接完整路径
			$filepath = rtrim($dir,'/').'/'.$filename;
			if(is_dir($filepath)){
				//如果是目录，就递归调用进去
				deldir($filepath);
			}
			if(is_file($filepath)){
				//如果是文件，就直接删除
				unlink($filepath);
			}
		}
		closedir($handle);
		rmdir($dir);
		return true;
		
	}

	echo '11111';
	var_dump(deldir('./apache'));