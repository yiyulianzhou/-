<?php
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');

    /*
    图片水印
    imagecopy() 拷贝图像的一部分
    参1 要加水印的图(原图)
    参2 水印图
    参3,4 水印位置x,y的坐标
    参5,6 水印图起始点坐标
    参7,8 水印的宽高
    imagecopymerge() 拷贝图像的一部分(透明图)
    参数同上
    参9 透明度 0为不透明  100为全透
     */
    picmark('./imgs/7.jpg','./imgs/qq.png',99);
    /**
     * [picmark 图片水印]
     * @param  string  $back  [原图]
     * @param  string  $water [水印图]
     * @param  integer $pos   [水印位置]
     * @return 处理好的水印图的路径
     */
    function picmark($back,$water,$pos=9)
    {
        //获取两张图的信息
        $b_info = getimagesize($back);
        $w_info = getimagesize($water);
        if (!$b_info || !$w_info) {
            echo '图片不正确';
            return false;
        }
        // echo '<pre>';
        //     print_r($b_info);
        //     print_r($w_info);
        // echo '</pre>';
        
        //获取两图的宽高属性
        list($b_w,$b_h) = $b_info;//原图
        list($w_w,$w_h) = $w_info;//水印图

        //判断水印图不能大于原图
        if ($w_w >= $b_w || $w_h >= $b_h) {
            echo '水印图过大';
            return false;
        }

        //获取类型
        list($b_type,$b_subtype) = explode('/',$b_info['mime']);//原图
        list($w_type,$w_subtype) = explode('/',$w_info['mime']);//水印图

        //生成变量函数
        $create_b = 'imagecreatefrom'.$b_subtype;//原图
        $create_w = 'imagecreatefrom'.$w_subtype;//水印图
        $save_img = 'image'.$b_subtype;//保存原图资源

        //确定水印的位置
        switch ($pos) {
            case 1:
                $x = 0;
                $y = 0;
                break;
            case 2:
                $x = ($b_w - $w_w)/2;
                $y = 0;
                break;
            case 3:
                $x = $b_w - $w_w;
                $y = 0;
                break;
            case 4:
                $x = 0;
                $y = ($b_h - $w_h)/2;
                break;
            case 5:
                $x = ($b_w - $w_w)/2;
                $y = ($b_h - $w_h)/2;
                break;
            case 6:
                $x = $b_w - $w_w;
                $y = ($b_h - $w_h)/2;
                break;
            case 7:
                $x = 0;
                $y = $b_h - $w_h;
                break;
            case 8:
                $x = ($b_w - $w_w)/2;
                $y = $b_h - $w_h;
                break;
            case 9:
                $x = $b_w - $w_w;
                $y = $b_h - $w_h;
                break;
            default:
                $x = mt_rand(0,$b_w - $w_w);
                $y = mt_rand(0,$b_h - $w_h);
                break;
        }

        //创建画布
        $b_img = $create_b($back);//原图
        $w_img = $create_w($water);//水印图

        //imagecopy() 拷贝图像的一部分
        // 参1 要加水印的图(原图)资源
        // 参2 水印图资源
        // 参3,4 水印位置x,y的坐标
        // 参5,6 水印图起始点坐标
        // 参7,8 水印的宽高
        
        // 开始添加水印
        // imagecopy($b_img,$w_img,$x,$y,0,0,$w_w,$w_h);
        imagecopymerge($b_img,$w_img,$x,$y,0,0,$w_w,$w_h,50);

        //生成文件名
        $ext = pathinfo($back,PATHINFO_EXTENSION);
        //生成路径
        $save_file = './water/'.date('YmdHis').uniqid().'.'.$ext;

        //保存图片
        $save_img($b_img,$save_file);

        imagedestroy($b_img);
        imagedestroy($w_img);

        //返回文件名
        return $save_file;
    }
    


