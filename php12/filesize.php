<?php 
	header("Content-type:text/html;charset=utf-8");
	/*
	1024 KB
	1024*1024 MB
	1024*1024*1024 GB
	1024*1024*1024*1024 TB
	1024*1024*1024*1024*1024 PB
	*/

	function getsize($size) {
		if($size >= pow(1024,3)) {
			//值 >= 1024M 就是GB
			$res = round($size/pow(1024,3),2);
			$ext = "GB";
		}elseif($size >=pow(1024,2)){
			//值 >=1024KB 就是MB
			$res = round($size/pow(1024,2),2);
			$ext = 'MB';
		}elseif($size >=pow(1024,1)){
			//值 >=1024B 就是KB
			$res = round($size/pow(1024,1),2);
			$ext = 'KB';
		}else{
			//值 <1024 就是字节单位
			$res = $size;
			$ext = "Byte";
		}
		return $res.$ext;
	}
