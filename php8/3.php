<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    正则表达式
        1.定界符
        ~!@#$%^&*(){}<> /#
        2.原子
        是组成正则的最小单位，原子就是匹配一个字符
        2.1 普通字符
        数字/字母下划线 0~9 A~Z a~z _
        2.2 特殊字符
        使用特殊字符，需要转义才能正常使用
        '' "" / . * + ? | () & ^ \
        需要匹配\ 必须使用四根 \ 来转义
        2.3 非打印字符
        \f -- 分页符
        \r -- 回车符
        \n -- 换行符
        \t -- 制表符
        \v -- 垂直制表符
        2.4 通用字符
        2.5 原子表
         3.元字符
         4.模式修正符
        */
        $str = "111\n222\t\t\t\t333\n444\n555";
        $regex = '/\t\t\t\t/';

        if(preg_match($regex,$str,$arr)) {
            echo '正则表达式<font size="5" color="green">'.$regex.'</font>匹配字串<font size="5" color="green">'.$str.'</font>成功';
            echo '<pre>';
            print_r($arr);
            var_dump($arr);
        } else {
            echo '正则表达式<font>'.$regex.'</font>匹配字串<font size="5" color="green">'.$str.'</font>失败';
        }

 ?>