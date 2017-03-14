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
    //4.作画
    for ($i=0; $i < 50; $i++) { 
        imagearc($img,150,150, 180-$i,70, 0,90, $yellow);
        imagearc($img,150,150, 180-$i,70, 90,180, $yellow);
        imagearc($img,150,150, 180-$i,70, 180,270, $yellow);
        imagearc($img,150,150, 180-$i,70, 270,360, $yellow);

        imagearc($img,350,150, 180-$i,70, 0,90, $yellow);
        imagearc($img,350,150, 180-$i,70, 90,180, $yellow);
        imagearc($img,350,150, 180-$i,70, 180,270, $yellow);
        imagearc($img,350,150, 180-$i,70, 270,360, $yellow);
    }
    imagefilledellipse($img,150,150, 25,50, $yellow);
    imagefilledellipse($img,350,150, 25,50, $yellow);

    imagefilledarc($img,250,300, 100,100, 0,180, $yellow,IMG_ARC_PIE);

    // imageellipse($img,250,200, 400,450, $yellow);
    

    //5.保存,输出
    header("content-type:image/jpeg");
    imagejpeg($img);
    //imagejpeg($img) imagegif($img)  imagepng($img)
    //6.关闭资源/销毁(施放内存)
    imagedestroy($img);