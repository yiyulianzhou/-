<?php 
    header("content-type:text/html;charset=utf-8");


    // echo '<pre>';
    //     print_r($_GET);
    // echo '</pre>';

    $filename = $_GET['name'];
    //从name里索取后缀
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    //限制下载类型
    $mime_type = array(
        'jpg'=>'image/jpeg',
        'png'=>'image/png',
        'gif'=>'image/gif',
        'rar'=>'application/zip',
        'html'=>'text/html',
        'php'=>'text/plain',
        'txt'=>'text/plain',
    );

    // 下载设定
    // 要下载的文件类型 MIME
    header('Content-type:'.$mime_type[$ext]);
    // 要下载的文件名字:
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    header("Content-Length:".filesize('./downlist/'.$filename));
    // 下载的资源的位置
    readfile('./downlist/'.$filename);


