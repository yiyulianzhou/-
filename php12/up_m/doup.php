<?php 
    header("content-type:text/html;charset=utf-8");
    require './function.php';

    echo '<pre>';
        print_r($_FILES);

    // $myfile = 'myfile';
    $size = 10485760;
    $type = array('image');
    $dir = './uploads/';

    foreach ($_FILES as $key => $val) {
        $upInfo[] = up($key, $size, $type, $dir);
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

    