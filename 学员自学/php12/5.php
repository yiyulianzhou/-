<?php
    header("content-type:text/html;charset=gbk");
    date_default_timezone_set('PRC');
    require './filesize.php';

    /*
    路径问题
    路径分隔符:
        UNIX /  只识别正斜线
        Windows / \ 识别正反斜线
    使用以下路径分隔符:(这是一个常量)
        DIRECTORY_SEPARATOR
    */
   echo 'D:'.DIRECTORY_SEPARATOR.'wamp'.DIRECTORY_SEPARATOR.'www'.DIRECTORY_SEPARATOR.'s47'.DIRECTORY_SEPARATOR.'php12';
    

