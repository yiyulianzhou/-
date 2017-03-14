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

    //3.填充背景
    // imagefill($img, x,y, $color)
    imagefill($img, 0,0, $black);
    //4.作画
    //画椭圆
    // imageellipse($img, OX,OY, wdith,height,$color);
    // imagefilledellipse($img, OX,OY, wdith,height,$color);
    //参1资源
    //参2,3 圆心坐标
    //参4 横轴宽度
    //参5 纵轴高度
    //参6 颜色
    imageellipse($img, 250,250, 500,300,$yellow);
    imageellipse($img, 250,250, 300,500,$yellow);
    imagefilledellipse($img, 250,250, 300,300,$yellow);

    imagefilledellipse($img, 250,250, 200,200,$black);
    for ($i=0; $i < 10; $i++) { 
        imageellipse($img, 250,250, 400+$i,200+$i,$red);
    }


    //5.保存,输出
    header("content-type:image/jpeg");
    imagejpeg($img);
    //imagejpeg($img) imagegif($img)  imagepng($img)
    //6.关闭资源/销毁(施放内存)
    imagedestroy($img);