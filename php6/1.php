<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    3.默认参数的函数
    在函数定义时，就给某些参数定义了初始值
    函数就会使用指定的初始值

    默认值必须是常量表达式（必须是一个确定的值）
    不可以用以下的形式来指定默认值
    x变量
    x类成员
    x函数的调用
    可以使用明确的值，还可使用数组或者null
    手册里用[]包裹的参数就是有默认值的参数
    */
    $str = "welcome to shanghai 呵呵哒";
    $arr = str_split($str,3);
    echo '<pre>';
        print_r($arr);
    echo '<pre/>';
    echo '<hr>';

    function human($name,$age,$type,$sex='男人') {
        echo '我是'.$type.$name;
        echo '我今年'.$age;
        echo '我是个'.$sex;
    }
    human('老王','30','隔壁的');
    echo '<br>';
    human('Obama','50','米国');
