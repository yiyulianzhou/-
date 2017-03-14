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
    //画弧线/圆弧
    // imagearc($img, OX,OY, width,height, $start,$end, $color);
    // imagefilledarc($img, OX,OY, width,height, $start,$end, $color,$style);
    //参1 资源
    //参2,3 圆心
    //参4 宽
    //参5 高
    //参6,7 为圆弧的开始及结束角度 !(角度的0°位置实在三点钟方向)
    for ($i=0; $i < 20; $i++) { 
        imagearc($img, 250,250, 400+$i,400+$i, 0,90, $blue);
        imagearc($img, 250,250, 400+$i,400+$i, 90,180, $red);
        imagearc($img, 250,250, 400+$i,400+$i, 180,270, $green);
        imagearc($img, 250,250, 400+$i,400+$i, 270,360, $yellow);
    }
    // imagefilledarc($img, 250,250, 400+$i,400+$i, 270,360, $yellow,IMG_ARC_PIE);
    // imagefilledarc($img, 250,250, 400+$i,400+$i, 0,90, $blue,IMG_ARC_CHORD );
    
    //饼状图
    for ($i=0; $i < 20; $i++) { 
        imagefilledarc($img, 250,250, 400+$i,400+$i, 0,90, $blue,IMG_ARC_PIE);
        imagefilledarc($img, 250,250, 400+$i,400+$i, 90,200, $red,IMG_ARC_PIE);
        imagefilledarc($img, 250,250, 400+$i,400+$i, 200,360, $green,IMG_ARC_PIE);
    }

    //5.保存,输出
    header("content-type:image/jpeg");
    imagejpeg($img);
    //imagejpeg($img) imagegif($img)  imagepng($img)
    //6.关闭资源/销毁(施放内存)
    imagedestroy($img);