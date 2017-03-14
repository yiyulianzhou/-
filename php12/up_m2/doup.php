<?php 
    header("content-type:text/html;charset=utf-8");
    require './function.php';

    echo '<pre>';
        print_r($_FILES);
    $myfile = 'myfile';
    $size = 10485760;
    $type = array('image');
    $dir = './uploads/';

    //统计数组元素个数(上传文件的个数)
    $count = count($_FILES[$myfile]['name']);
    //重组数组
    for ($i = 0; $i < $count; $i++) { 
        foreach ($_FILES[$myfile] as $key => $val) {
            $_FILES[$myfile.$i][$key] = $val[$i];
        }
    }
    unset($_FILES[$myfile]);
    print_r($_FILES);

    

    foreach ($_FILES as $keys => $vals) {
        $upInfo[] = up($keys, $size, $type, $dir);
    }

    // print_r($upInfo);

    foreach ($upInfo as $value) {
        $dirs = rtrim($dir,'/').'/';
        $dirs .= substr($value, 0,4).'/';//2016
        $dirs .= substr($value, 4,2).'/';//04
        $dirs .= substr($value, 6,2).'/';//27
        // echo $dir;
        $imgpath = $dirs.$value;
        echo '<img src="'.$imgpath.'" width="300">';
    }

    