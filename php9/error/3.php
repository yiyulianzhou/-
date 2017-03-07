<?php 
    header("Content-type:text/html;charset=utf-8");
    /**
     记录错误日志 php5.6
     1.错误报告写在文件里
     1）向PHP发送所有错误
     error_reporting = E_ALL (line 449)
     2).关闭错误报告
     display_errors = Off(line 466)
     3).错误是否记录
     log_errors = On(line 488)
     4).限定错误记录文件的大小
     log_errors_max_len = 1024
     5).错误日志文件的路径
     error_log = "d:/error/error.log"

     p.s. 自定义写入错误报告内容
     error_log
     */

     //2.卸载系统日志
     //error_log = syslog
     $num = 99990;
     if ($num > 10000) {
         # code...
        error_log('哈哈，我的用户超过1w人了！！！',3,'d:/error/error.log');
     }
     echo $mark;

 ?>