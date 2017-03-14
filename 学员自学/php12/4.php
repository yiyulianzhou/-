<?php
    header("content-type:text/html;charset=gbk");
    date_default_timezone_set('PRC');
    require './filesize.php';

    /*
    文件的属性
    file_exists() 判断文件或目录是否存在?
    filesize()    获取文件的大小(字节)
    is_readable()  是否可读
    is_writable()  是否可写
    is_executable()  是否可执行
    filectime() 创建时间 change
    filemtime() 修改之间 modify
    fileatime() 访问时间 access
    stat() 获取大部分的文件属性
    */
    if (file_exists('./test')) {
        echo '存在';
    }else{
        echo 'no存在';
    }
    echo '<hr>';
    echo filesize('./imgs/');echo '<br>';
    echo filesize('./test');echo '<br>';
    echo getsize(filesize('./php5.6.chm'));
    echo '<br>';
    echo getsize(1024000000000);
    echo getsize(filesize('./imgs/'));
    echo '<hr>';
    var_dump(is_readable('./filesize.php'));
    var_dump(is_writable('./filesize.php'));
    var_dump(is_executable('./filesize.php'));
    var_dump(is_executable('./write.exe'));
    echo '<hr>';
    echo '1.php的创建时间:'.date('H:i:s',filectime('./1.php'));echo '<br>';
    echo '1.php的修改时间:'.date('H:i:s',filemtime('./1.php'));echo '<br>';
    echo '1.php的访问时间:'.date('H:i:s',fileatime('./1.php'));echo '<br>';
    echo '<hr>';
    echo '<pre>';
        print_r(stat('./1.php'));
    echo '</pre>';

