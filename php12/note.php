<?
前情提要

1.
文件系统常用函数:
    filetype()       取得文件类型,参数为路径
    file_exists()    判断目录或文件是否存在
    filesize()       获取一个文件的大小,字节

    is_readable()    是否可读
    is_writable()    是否可写
    is_executable()  是否可执行
    
    filectime()      file change time 创建时间
    filemtime()      fime modify time 修改时间
    fileatime()      fime access time 访问时间
    
    stat()           获取大部分属性
    路径分隔符:DIRECTORY_SEPARATOR 这是一个常量 
    
    dirname()      返回路径中的 目录部分
    basename()     返回路径中的 文件名部分
    pathinfo()     以数组的形式返回路径信息

判断文件/目录
    is_dir()  判断是否是目录
    is_file() 判断是否是文件
    
目录的操作
    opendir()    打开一个目录,返回一个资源
    readdir()    读取打开的资源 并返回文件名
    closedir()   关闭由opendir打开的目录资源

    mkdir()  新建目录
    rmdir()  只能删除空目录
    unlink() 删除文件
    copy()   复制文件
    rename() 重命名一个文件或目录,还可以进行剪切

文件的操作
    touch()   新建文件
    unlink()  删除文件
    copy()    复制文件
    rename()  剪切文件
    rename()  重命名文件

    file_put_contents() 将字符串写入文件. 参3为写入方式:FILE_APPEND(追加)
    file_get_contents() 将文件内容读入一个字符串

操作文件资源
    fopen()   将文件打开为资源
    参1为文件的URL
    参2为打开的模式:
        read
          r  只读方式打开,指针指头
          r+ 读写方式打开,指针指头
        write
          w  写入方式打开,指针指头,清空内容.文件无,则新建.
          w+ 读写方式打开,指针指头,清空内容.文件无,则新建.
        append
          a  写入方式打开,指针指末尾.文件无,则新建.
          a+ 读写方式打开,指针指末尾.文件无,则新建.
        execute
          x  创建并以写入方式打开,指针指头.文件存在就报错
          x+ 创建并以读写方式打开,指针指头.文件存在就报错
        binary
          b  以二进制模式打开文件,一般与以上组合使用
        text
          t  以文本模式打开,windows下的选项,不常用.

    fclose()  关闭打开的文件资源

读写文件内容的函数
    fwrite()  写入文件
    fread()   读取打开的文件
    fgets()   读取一行  参2可指定读取本行的长度
    fgetc()   读取一个字节
    feof()    测试文件指针是否到了文件结束的位置

文件的一些基本操作函数
    file()      以数组的形式读取文件内容,每一行是一个数组单元,不管行有没有内容
    readfile()  读取内容,并输出到浏览器(将文件内容交给浏览器)
    ftruncate() 将文件截取到指定长度

操作文件指针
    rewind()  重置文件指针
    ftell()   返回文件指针读/写的位置
    fseek()   在文件中定位指针






2.
复习和学习文件上传中所需的知识点

客户端的上传设置:
    form  三个属性
        action 提交地址
        method = post
        entype = multipart/form-data 
            不对字符编码。
            在使用包含文件上传控件的表单时，必须使用该值。
    input type = file  name=myfile

    限制文件上传大小(隐藏域,此项必须写在上传域之前)
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">

服务端的上传设置:

php.ini 配置文件的设置
    file_uploads = On  开启 (line 801)
    设置值上传文件的开关

    upload_tmp_dir ="d:/wamp/tmp"  (line 806)
    设置上传文件的临时存放目录

    upload_max_filesize = 100M  (line 810)
    设置上传文件的最大值  默认64M

    max_file_uploads = 20  (line 813)
    设置单词上传文件的个数

    post_max_size = 200M (line 660)  默认3M
    设置post方式上传的大小值
    此项设置必须大于 文件上传大小的值

    
处理表单中上传文件的信息
    $_GET和$_POST接受的是表单数据
    $_FILES
    返回一个二维数组
    第一维是表单里文件上传域name的值
    第二维是有五个元素
        [name] => 文件原名
        [type] => 文件的 MIME 类型
            主类型/子类型
            image/jpeg
            image/png
            text/html
            text/plain 普通文本文件.php .txt
            application/x-rar-compressed .rar
            application/zip  .rar  .zip
            video/x-msvideo AVI文件 .avi
        [tmp_name] => 临时的文件名
        [error] =>
            0 : 就表示上传成功,没有错误发生 
            1 : 上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。 
            2 : 上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。 
            3 : 文件只有部分被上传。 
            4 : 没有文件被上传。 
            6 : 找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。 
            7 : 文件写入失败。PHP 5.1.0 引进。
        [size] => 文件的大小(字节)

处理上传的文件
    php提供了两个函数来操作文件上传
    is_uploaded_file($_FILES['tmp_name']).
    判断是否是通过POST方式上传上来的文件

    move_uploaded_file($_FILES['tmp_name'], $path).
    将上传上来的文件,移动到指定位置
    成功返回 true  失败 ,返回 false
