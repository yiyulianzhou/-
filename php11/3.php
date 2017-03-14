<?php
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');

    echo zoom('./imgs/10.jpg',100,1000);
    /*
    图片缩放
    imagecopyresampled();
    参1 缩放图片的资源
    参2 源图的资源
    参3,4 缩放图片画图的起始点坐标
    参5,6 源图拷贝的起始点坐标
    参7,8 缩放图片的宽高
    参9,10 源图的宽高
     */
    /**
     * [zoom 缩放函数]
     * @param  string  $imagefile [要缩放的图片]
     * @param  integer $zoom_w    [缩放的宽度]
     * @param  integer $zoom_h    [缩放的高度]
     * @return 缩放好的文件名字,如果缩放失败返回false
     */
    function zoom($imagefile,$zoom_w=200,$zoom_h=200)
    {
        //获取原图信息
        $img_info = getimagesize($imagefile);
        if (!$img_info) {
            echo '图片非法';
            return false;
        }
        //获取源图片的宽和高
        list($src_w,$src_h) = $img_info;
        //获取mime
        $mime = $img_info['mime'];
        //获取主类型和子类型
        list($type,$subtype) = explode('/', $mime);

        //生成打开和关闭的函数名
        $create_img = 'imagecreatefrom'.$subtype;
        $save_img = 'image'.$subtype;

        //等比缩放
        // 宽>高?  高>宽?
        if ($src_w > $src_h) {
            //宽>高  按宽度来缩放,按比例来改变高度
            $zoom_h = $zoom_w / $src_w * $src_h;
            $pre = $zoom_w;
        }else{
            //宽<高  按高度来缩放,按比例来改变宽度
            $zoom_w = $zoom_h / $src_h * $src_w;
            $pre = $zoom_h;
        }

        //创建画布
        $src_img = $create_img($imagefile);//源图的资源
        $zoom_img = imagecreatetruecolor($zoom_w,$zoom_h);//缩放图的资源

        //开始缩放
        // imagecopyresampled();
        // 参1 缩放图片的资源
        // 参2 源图的资源
        // 参3,4 缩放图片画图的起始点坐标
        // 参5,6 源图拷贝的起始点坐标
        // 参7,8 缩放图片的宽高
        // 参9,10 源图的宽高
        imagecopyresampled($zoom_img,$src_img, 0,0, 0,0, $zoom_w,$zoom_h,$src_w,$src_h);
        
        //生成保存文件名
        $save_file = dirname($imagefile).'/'.$pre.'_'.basename($imagefile);
        //保存图片
        $save_img($zoom_img,$save_file);
        imagedestroy($src_img);
        imagedestroy($zoom_img);
        return $save_file;
    }

