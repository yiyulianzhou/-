<?php 
    header("content-type:text/html;charset=utf-8");

    //1.创建画布
    $img = imagecreatetruecolor(500,500);
    //参1,2 画布宽和高 
    // var_dump($img);
    //成功后返回图象资源,失败后返回 FALSE 
    //2.准备颜色
    //imagecolorallocate(image, red, green, blue)
    //参1 资源
    //参2,3,4  RGB   : 0-255   0x00~0xff
    $white = imagecolorallocate($img, 255, 255, 255);
    $black = imagecolorallocate($img, 0,0,0);
    $red = imagecolorallocate($img, 255, 0,0);
    $green = imagecolorallocate($img, 0, 255, 0);
    $blue = imagecolorallocate($img, 0, 0,255);
    $yellow = imagecolorallocate($img, 255,255,0);
    $light_r = imagecolorallocate($img, 255, 100,100);
    $light_g = imagecolorallocate($img, 0, 100,0);
    $light_b = imagecolorallocate($img, 20, 20,255);

    //3.填充背景
    // imagefill($img, x,y, $color)
    imagefill($img, 0,0, $black);
    //4.写字
    // imagechar($img,5,250,250,'WE CAN YOU CAN?',$red);
    // imagecharup($img,5,250,250,'WE CAN YOU CAN?',$red);

    // imagestring($img,5,200,200,'WE CAN YOU CAN?',$red);
    // imagestringup($img,5,200,200,'WE CAN YOU CAN?',$red);
    // imagettftext($img, $size,角度,x,y,$color,$file,$str);
    //参1 资源
    //参2 字体大小(PX)
    //参3 字体角度
    //参4,5 写入文子坐标
    //参6 颜色
    //参7 指定的字体文件
    //参8 写啥?
    imagettftext($img, 20,0,250,250,$red,'./font/'.mt_rand(1,5).'.ttf','时间就是金钱,我的朋友!');

    imagettftext($img, 20,90,250,250,$red,'./font/'.mt_rand(1,5).'.ttf','时间就是金钱,我的朋友!');
    imagettftext($img, 20,180,250,250,$red,'./font/'.mt_rand(1,5).'.ttf','时间就是金钱,我的朋友!');
    imagettftext($img, 20,270,250,250,$red,'./font/'.mt_rand(1,5).'.ttf','时间就是金钱,我的朋友!');


    //5.保存,输出
    header("content-type:image/jpeg");
    imagejpeg($img);
    //imagejpeg($img) imagegif($img)  imagepng($img)
    //6.关闭资源/销毁(施放内存)
    imagedestroy($img);