<?php 
    header("Content-type:text/html;charset=utf-8");
    //trigger_error('这是用户自定义的notice错误',E_USER_NOTICE);
    //trigger_error('这是用户自定义的warning错误',E_USER_WARNING);
    //trigger_error('这是用户自定义的error错误',E_USER_ERROR);

    //用户自定义错误报告
    //set_error_handler()

    function error_info($error_level,$error_msg,$error_file,$error_line) 
    {
        echo '错误号'.$error_level.':';
        echo '错误信息：<font>'.$error_msg.'</font>';
        echo '文件为：'.$error_file;
        echo '<font color="#f00" size="5">[line:'.$error_line.']</font>';
    }
    //将自订的错误函数，注册到php系统中
    set_error_handler('error_info');

    echo $a;