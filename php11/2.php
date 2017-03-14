<?php
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');

    for ($i=1; $i <= 9; $i++) { 
        echo ttfmark('./imgs/'.$i.'.jpg','@anny',$i);
        echo '<hr>';
    }
    /**
     * [ttfmark 文字水印]
     * @param  string  $imagefile [原图的路径]
     * @param  string  $msg       [水印信息]
     * @param  integer $pos       [水印位置]
     * @return 处理好的水印图片名字
     */
    function ttfmark($imagefile,$msg='水印',$pos=9)
    {
        //得到原图的基本信息
        $img_info = getimagesize($imagefile);
        if (!$img_info) {
            echo '图片非法!';
            return false;
        }
        // echo '<pre>';
        //     print_r($img_info);
        // echo '</pre>';
        //得到原图的宽高
        list($w,$h) = $img_info;

        //获取MIME类型
        $mime = $img_info['mime'];
        //分割主类型和子类型
        list($type,$subtype) = explode('/',$mime);

        //生成打开和保存图片的函数名
        $create_img = 'imagecreatefrom'.$subtype;
        $save_img = 'image'.$subtype;

        //确定水印的位置
        switch ($pos) {
            case 1:
                $x = 0;
                $y = 0 + 100;
                break;
            case 2:
                $x = $w / 2 - 200;
                $y = 0 + 100;
                break;
            case 3:
                $x = $w - 200;
                $y = 0 + 100;
                break;
            case 4:
                $x = 0;
                $y = $h / 2;
                break;
            case 5:
                $x = $w / 2 - 200;
                $y = $h / 2;
                break;
            case 6:
                $x = $w - 200;
                $y = $h / 2;
                break;
            case 7:
                $x = 0;
                $y = $h;
                break;
            case 8:
                $x = $w / 2 - 200;
                $y = $h;
                break;
            case 9:
                $x = $w - 200;
                $y = $h;
                break;
            default:
                $x = mt_rand(0,$w);
                $y = mt_rand(0,$h);
                break;
        }

        //打开图片为背景
        $img = $create_img($imagefile);

        //添加水印
        imagettftext(
            $img,
            50, 0,
            $x,$y,
            imagecolorallocate($img, 200,200,200),
            './font/3.ttf',
            $msg
            );

        //获取原图片的后缀
        $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
        //生成新的文件名字
        $save_file = './ttfimgs/'.date('YmdHis').uniqid().'.'.$ext;

        //保存图片
        $save_img($img,$save_file);
        //销毁资源
        imagedestroy($img);
        //返回处理好的图片路径
        return $save_file;
    }
