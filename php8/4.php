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
        \d 匹配任意一个十进制数字[0~9]
        \D 匹配任意一个十进制以外的字符

        \s 匹配任意一个空白字符 [空格 tab \f\r\n\t\v]
        \S 匹配任意一个除了空白字符意外的任意一个字符

        \w 匹配任意一个数字/字母/下划线[0-9 a-z A-Z _]
        \W 匹配任意一个数字/字母/下划线以外的字符
        (打死我，大写取反)
        2.5 原子表
         3.元字符
         4.模式修正符
        */
         $str = "1314520";
         $regex = '/\d\d\d\d/';//1314

         $str = "13a14b520c";
         $regex = '/\d\D/';//3a 4b 0c

         $str = "13a14b      50cd";
         $regex = '/\s/';//匹配到5个空格

         $str = "13a14b   ___  520cd";
         $regex = '/\S/';//匹配14个字符

         $str = "13a14b   ___ 520cd";
         $regex = '/\w/';//匹配到1
         $regex = '/\W/';//匹配到空格
         if (preg_match_all($regex,$str,$arr)) {
             echo '正则表达式<font size="5" color="green">'.$regex.'</font>匹配字串<font size="5" color="green">'.$str.'</font>成功';
             echo '<pre>';
             var_dump($arr);
         } else {
            echo '正则表达式<font size="5" color="green">'.$regex.'</font>匹配字串<font size="5" color="green">'.$str.'</font>失败';
         }
      
 ?>