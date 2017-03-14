<?php 
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');
    
    /**
     * [up 上传函数]
     * @param  string  $myfile [表单中name的值 默认为myfile]
     * @param  integer $size   [允许上传的最大值 默认为10M]
     * @param  array   $type   [允许上传的主类型 默认为image text]
     * @param  string  $dir    [默认的保存根目录 默认为./uploads/]
     * @return 成功返回文件的名字,失败返回false
     */
    function up($myfile='myfile', $size=10485760, $type=array('image','text'), $dir='./uploads/')
    {
        // echo '<pre>';
        // print_r($_FILES); 

        //判断$_FILES是否为空
        if (empty($_FILES)) {
            echo '请检查您的表单设置或php.ini中的post的设置';
            return false;
        }

        //接收上传的全部数据
        $fileError = $_FILES[$myfile]['error'];//错误号
        $fileSize = $_FILES[$myfile]['size'];//文件大小
        $fileType = $_FILES[$myfile]['type'];//文件类型 image/png
        $fileName = $_FILES[$myfile]['name'];//原文件名
        $fileTmp = $_FILES[$myfile]['tmp_name'];//临时文件

        //判断错误
        if ($fileError > 0) {
            echo '文件上传出错!';
            switch ($fileError) {
                case 1:
                    echo '上传的文件超过了php.ini 中 upload_max_filesize选项限制的值';
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
                    echo '找不到临时文件夹。';
                    break;
                case 7:
                    echo '文件写入失败。';
                    echo '<br>';
                    break;
            }
            //执行到此处函数停止
            return false;
        }

        //自由限制文件大小
        if ($fileSize > $size) {
            //上传文件的大小 > 限制大小
            echo '文件超出限制大小';
            return false;
        }

        //限制文件的类型
        list($mainType) = explode('/',$fileType);
        // echo $mainType;
        // 在调用此函数时,可指定文件主类型,进行匹配
        if (!in_array($mainType, $type)) {
            echo '文件类型不合法!';
            return false;
        }

        //保存文件的设定
        //文件名的形式: 时间+唯一的ID+后缀
        //后缀
        $ext = pathinfo($fileName,PATHINFO_EXTENSION);
        $saveName = date('Ymd').uniqid().'.'.$ext;
        //指定保存的路径
        $savePath = rtrim($dir,'/').'/'.date('Y/m/d/');
        //检测目录是否存在
        if (!file_exists($savePath)) {
            //如果不存在,则建之
            mkdir($savePath, 0777, true);
        }
        //保存路径
        $saveFile = $savePath.$saveName;
        
        //移动上传来的文件到指定位置
        if (move_uploaded_file($fileTmp, $saveFile)) {
            echo '上传成功!<br>';
            return $saveName;
        }else{
            echo '上传失败!<br>';
            return false;
        }

    }



