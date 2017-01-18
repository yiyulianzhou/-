<?php
  include 'config.php';
    /**
     * 专业跳转三十年
     **/
    function redirect($msg='', $url='', $t=3){
        echo '<div style="text-align:center; line-height:130px;width:280px;height:130px;border:1px solid #abcdef;background:#abcdef;margin:180px auto;">';
        echo $msg;

        if($url=='')
            $url = $_SERVER['HTTP_REFERER'];

        echo '<meta http-equiv="refresh" content="'.$t.';url='.$url.'" />';
        echo '</div>';
        exit;
    }
	/*	
	*	专业查询三十年
		只负责查询
	*/
	function query($link,$sql){
    //6.发送sql语句
    $result = mysqli_query($link,$sql);
    //7.处理结果集
		if($result && mysqli_num_rows($result) > 0){
			$arr = array();
		
			while($row = mysqli_fetch_assoc($result)){
				$arr[] = $row;
			}
			
			return $arr;
		}
		
		return false;
		
	}
	
	/*
	专业执行增，删，改的函数（不需要结果集，只需要执行结果的）
	*/
	function execute($link,$sql){
    //6.发送sql语句
    $result = mysqli_query($link,$sql);
		//7.处理结果集
		if($result && mysqli_affected_rows($link) > 0){
		
			if(mysqli_insert_id($link))
				return mysqli_insert_id($link);		// 添加的时候，会返回这里
				
			return true;		// 删除，修改的时候，会返回这个
		}
		
        return false;	// 操作失败

    }

    
    /**
     * 与文件上传相关的php.ini的配置
     *
     * upload_max_filesize = 10M    // 设置上传文件的最大大小
     * 
     * post_max_size = 200M         // 设置表单POST提交的最大大小
     *
     * upload_tmp_dir =             // 设置上传文件的临时存放目录, 如果不指定，或指定的临时目录不存在，它会去用操作系统自己的临时目录
     *
     * file_uploads = On            // 文件上传的开关
     *
     *
     * 文件上传函数
     * @param string $field 表单中文件上传域的name属性值
     * @param string $dir   文件上传成功后的存放目录
     * @param array  $type  允许上传的文件主类型  image  text  application 
     * @param int    $size  允许上传的文件大小
     * @return 文件上传成功返回文件名，否则返回false
     **/
    
    function upload($field='file', $dir='./uploads/', $type=array('image','text'), $size=10485760){

        // 1.判断错误
        if($_FILES[$field]['error'] > 0){
            switch($_FILES[$field]['error']){

                case 1:
                    echo '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                    break;
                    
                case 2:
                    echo '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
                    break;

                case 3:
                    echo '文件只有部分被上传';
                    break;

                case 4:
                    echo '没有文件被上传';
                    break;

                case 6:
                    echo '找不到临时目录';
                    break;

                case 7:
                    echo '写入文件失败';
                    break;
            
            }
            // exit('文件上传出错<br/>');
            return false;       // 一但出错，到这终止。return之后 的代码不会再被执行
        }


        // 由自己来限制上传文件的大小
        $allow_size = $size;

        if($_FILES[$field]['size'] > $allow_size){
            echo '文件过大';
            return false;
        }
        

        // 对上传的文件作限制
        // 只允许上传图片
        $allow_type = $type;

        // 要获取到上传文件的主类型
        // array(0=>'image', 1=>'gif');
        list($maintype) = explode('/' ,$_FILES[$field]['type']);

        if(!in_array($maintype, $allow_type)){
            echo '文件类型不合法!';
            return false;
        }
        
        // 不同图片类型拥有不同的图片后缀
        // 从原图片名获取图片后缀
        $ext = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);

        // 产生新文件 名
        $filename = date('Ymd').uniqid().'.'.$ext;

        // 拼接保存目录, 按年月日时分 每一分钟创建一个存放目录
        $dir = rtrim($dir,'/').'/'.date('Y/m/d/');

        // 检测文件存在目录是否存在
        if(!file_exists($dir)){
            mkdir($dir, 0777, true);
        }

        // 拼接完整的保存路径
        $filepath = $dir.$filename;

        // 移动上传文件
        if(move_uploaded_file($_FILES[$field]['tmp_name'], $filepath) ){
            // 返回文件名
            return $filename;
        }


        return false;
    }



    

    /**
     * 缩放函数
     * @param string $img 图片路径
     * @param int $width 缩放后的图片宽度
     * @param int $height 缩放后的图片高度
     **/
    function zoom($img, $dst_w=200, $dst_h=200){
        // 获取原图的图片信息
        $info = getimagesize($img);

        /*
        echo "<pre>";
        print_r($info);
        echo "</pre>";
         */

        // 获取图片的有用信息
        $mime = $info['mime'];      // 获取原图的mime类型

        // 获取mime子类型，组成函数名
        $subtype = ltrim(strrchr($mime, '/'), '/');

        // 组成函数名
        $c_func = 'imagecreatefrom'.$subtype;       // 打开图片为背景
        $s_func = 'image'.$subtype;                 // 保存图片的函数

        // 获取原图的宽和高
        list($src_w, $src_h) = $info;

        // 处理等比缩放
        // 首先判断原图是宽大于高呢？还是高大于宽？
        if($src_w > $src_h){
            // 说明宽大于高，就得按宽度来缩放
            $dst_h = $dst_w/$src_w * $src_h;
            $pre = $dst_w;
        }else{
            // 说明高大于宽，就得按高度来缩放
            $dst_w = $dst_h/$src_h * $src_w;
            $pre = $dst_h;

        }


        // 然后呢开始缩放

        // 1.创建画布
        $src_img = $c_func($img);
        $dst_img = imagecreatetruecolor($dst_w, $dst_h);

        // 开始缩放
        imagecopyresampled($dst_img, $src_img, 0,0, 0,0, $dst_w, $dst_h, $src_w, $src_h);

        // 获取文件后缀
        // $suffix = strrchr($img,'.');

        // 获取原文件名
        $original_file_name = ltrim(strrchr($img, '/'),'/');


        /*
        echo "<pre>";
        print_r(pathinfo($img));
        echo "</pre>";
         */

        $save_path = dirname($img).'/'.$pre.'_'.basename($img);

        // 保存图片
        $result = $s_func($dst_img, $save_path);

        // 销毁图片资源
        imagedestroy($src_img);
        imagedestroy($dst_img);

        return $result;
    }    
    

     //生成订单函数  
      function build_order_no(){
        return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        }


/**
      * 生成唯一的订单号 20170209111259232312
      * 2017-年日期
      * 02-月份
      * 09-日期
      * 11-小时
      * 12-分
      * 59-秒
      * 2323-微秒
      * 12-随机值
      * @return string
      */
      function trade_no() {
         list($usec, $sec) = explode(" ", microtime());
         $usec = substr(str_replace('0.', '', $usec), 0 ,4);
         $str  = rand(10,99);
         return date("YmdHis").$usec.$str;
     }
    /**
    * 分页函数
    */

      function page($total,$num){
        $pages = ceil($total/$num);
        $page = isset($pap['p'])?$pap['p']:1;
        $page = max($page,1);
        $page = min($page,$pages);
        $offset = ($page-1)*$num;
        $prev = $next = $pap;
        $prev['p']=max($page-1,1);
        $next['p']=min($page+1,$pages);
        $url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].'?';
        $link1 = $url.$prev['p'];
        $link2 = $url.$next['p'];
        $str = '<a href="'.$link1.'">上一页</a>';
        $str .= '<a href="'.$link2.'">下一页</a>';
        $list['offset'] = $offset;
        $list['str'] = $str;
        return $list;
    }

    /**
    * 获取路径的函数
    */
        //路径函数
    function getpath($url,$filename,$a='d'){
      switch($a){
        case 'a':
          $pap = '30_';
          break;
        case 'b':
          $pap = '50_';
          break;
        case 'c':
          $pap = '140_';
          break;
        case 'd':
          $pap = null;
          break;
      }
      $img_path = $url.'uploads/';
      $img_path .= substr($filename, 0, 4).'/';
      $img_path .= substr($filename, 4, 2).'/';
      $img_path .= substr($filename, 6, 2).'/';
      $img_path .= $pap.$filename;
      return $img_path;
  } 
	
