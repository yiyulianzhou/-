<?php
    header("content-type:text/html;charset=utf-8");

    $img = imagecreatetruecolor(100,40);
    $black = imagecolorallocate($img, 0,0,0);
    $red = imagecolorallocate($img, 255, 0,0);
    $green = imagecolorallocate($img, 0, 255, 0);
    $blue = imagecolorallocate($img, 0, 0,255);
    $gray = imagecolorallocate($img, 200,200,200);

    imagefill($img,0,0,$gray);
    //画干扰点
    for ($i=0; $i < 50; $i++) { 
        $x = mt_rand(0,100);
        $y = mt_rand(0,40);
        imagesetpixel($img, $x, $y, $blue);
    }
    //画干扰线
    for ($i=0; $i < 5; $i++) { 
        $x1 = mt_rand(0,100);
        $y1 = mt_rand(0,40);
        $x2 = mt_rand(0,100);
        $y2 = mt_rand(0,40);
        imageline($img, $x1,$y1, $x2,$y2, $red);
    }
    //产生源字符
    $str = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    // echo $str[61];exit;
    $str = substr(str_shuffle($str),0,4);

    //写字
    // imagettftext($img,15,0,0,30,$black,'./font/'.mt_rand(1,5).'.ttf',$str);
    $w = 100 / 4;
    for ($i=0; $i < 4; $i++) {
        $x = $w * $i + 5;
        imagettftext(
            $img,15,0,
            $x,30,
            $black,
            './font/'.mt_rand(1,5).'.ttf',
            $str[$i]
        );  
    }

    header("content-type:image/png");
    imagepng($img);
    imagedestroy($img);

