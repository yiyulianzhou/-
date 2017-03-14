<?php
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');

    /*
    文件系统处理
    文件类型
    WINDOWS:
        dir  目录
        file 文件
        unknow 未知类型 (见图 unknown.jpg)
    UNIX:
        block 块设备文件,如磁盘分区/软驱/光驱/CD-ROM
        char  字符设备,指在I/O传输过程中,以字符为单位进行传输的设备.例如键盘/打印机
        dir  目录
        fifo  命名管道
        file  普通文件类型,如文本文件或可执行文件
        link  符号链接
        unknow  未知类型
    获取文件的类型
    filetype();
     */
    echo '<h2>文件类型</h2>';
    echo filetype('./imgs');
    echo '<br>';
    echo filetype('./imgs/1.jpg');
    echo '<br>';
    echo filetype('./test');



