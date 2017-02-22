<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    变量函数
        玩的也是文字游戏
        变量名替代函数名就是变量函数
    */
    //可变变量
    $a = 'hehe';
    $hehe = '123456';
    echo $$a;

    echo '<hr>';
    $b = 'md5';
    echo $b('123456');
    echo '<br>';
    echo md5('123456');