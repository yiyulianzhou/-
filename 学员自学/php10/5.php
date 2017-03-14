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
    //画多边形
    // imagepolygon($img, array(), $num, $color)
    // imagefilledpolygon($img, array(), $num, $color)
    // 参1 资源
    // 参2 为数组,里面包含了多边形各个顶点的坐标
    // 参3 顶点的数量
    // 参4 颜色
    imagepolygon($img, array(250,100, 100,400, 400,400), 3, $green);
    imagefilledpolygon($img, array(250,150, 150,350, 350,350), 3, $red);
    
    imagepolygon($img, array(250,50, 50,200, 100,450, 400,450, 450,200), 5, $yellow);

    //5.保存,输出
    header("content-type:image/jpeg");
    imagejpeg($img);
    //imagejpeg($img) imagegif($img)  imagepng($img)
    //6.关闭资源/销毁(施放内存)
    imagedestroy($img);