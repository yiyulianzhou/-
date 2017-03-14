<?php
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');

    //直接跳转到文件,给你打开看
    // for ($i=1; $i < 11; $i++) { 
    //     echo '<a href="./imgs/'.$i.'.jpg">图片'.$i.'</a><br>';
    // }
    
    // 使用GD库打开图片为背景
    //   imagecreatefromjpeg()
    //   imagecreatefrompng()
    //   imagecreatefromgif()
    $num = mt_rand(1,11);
    $img = imagecreatefromjpeg('./imgs/'.$num.'.jpg');

    imagettftext(
        $img,60,mt_rand(-40,40),
        mt_rand(100,1000),mt_rand(400,1000),
        imagecolorallocate($img, 255, 0,0),
        './font/5.ttf',
        'I Want To Go There. ~ ~!'
        );

    // header("content-type:image/jpeg");
    imagejpeg($img,'./'.$num.'.jpg');
    imagedestroy($img);

    echo '保存成功'.date('YmdHis');
