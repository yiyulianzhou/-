<?php
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');
 
    echo cut('./imgs/8.jpg',100,150,180,180);
    /*
    裁剪图片
    imagecopyresampled();
    参1 裁剪图片的资源
    参2 源图的资源
    参3,4 裁剪图片起始点坐标
    参5,6 源图裁剪的起始点坐标
    参7,8 裁剪图片的宽高
    参9,10 裁剪的宽高
     */
    
    /**
     * [cut description]
     * @param  string  $imagefile [要才建的图片路径]
     * @param  integer $x         [裁剪起始点x]
     * @param  integer $y         [裁剪起始点y]
     * @param  integer $width     [裁剪宽度]
     * @param  integer $height    [裁剪高度]
     * @return 才建好的文件名
     */
    function cut($imagefile,$x=0,$y=0, $width=100,$height=100)
    {
        //获取图片信息
        $img_info = getimagesize($imagefile);
        if (!$img_info) {
            echo '图片非法';
            return false;
        }
        //宽高
        list($w,$h) = $img_info;
        //获取主类型子类型
        list($type,$subtype) = explode('/', $img_info['mime']);

        //判断裁剪尺寸
        if (($w < $width) || ($h < $height)) {
            echo '裁剪尺寸大于原图';
            return false;
        }

        //生成动态的函数名
        $create_img = 'imagecreatefrom'.$subtype;
        $save_img = 'image'.$subtype;

        //创建画布
        $src_img = $create_img($imagefile);//原图的画布
        $cut_img = imagecreatetruecolor($width,$height);//裁剪图的画布

        //开始裁剪
        imagecopyresampled($cut_img,$src_img,0,0, $x,$y, $width,$height,$width,$height);
        /*
        参1 裁剪图片的资源
        参2 源图的资源
        参3,4 裁剪图片起始点坐标
        参5,6 源图裁剪的起始点坐标
        参7,8 裁剪图片的宽高
        参9,10 裁剪的宽高
         */
        
        //生成文件名
        $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
        //拼接保存路径
        $save_file = './cut/'.date('YmdHis').uniqid().'.'.$ext;

        //保存图片
        $save_img($cut_img,$save_file);

        //销毁资源
        imagedestroy($cut_img);
        imagedestroy($src_img);

        //保存好的文件名 返回
        return $save_file;
    }
    


