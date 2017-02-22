<?php 
    /*
    5.引用参数的函数
        在函数的形参中使用引用传递，就像引用变量一样
        函数执行后，会改变函数外的变量值
    */
    //引用变量
        $a = 10;
        $b = &$a;
        $b = 100;
        echo $a.'/'.$b;
        echo '<hr>';
    //引用参数的安徽省农户
        function test(&$n) {
            $n = $n + $n;
            return $n;
        }
    $p = 50;
    echo $p;
    echo '<br>';

    echo test($p);
    echo '<br>';
    echo $p;
    echo '<hr>';

    //(调用引用参数的函数时，只能传递变量，不能传递具体的值)
    //报错信息：只有变量可以通过引用传递
    //echo test(100);

    echo '<hr>';
    //系统的引用参数的函数
    //shuffle sort

    $arr = array(1,2,3,4,5);
    echo '<pre>';
    print_r($arr);

    shuffle($arr);
    print_r($arr);

    sort($arr);
    print_r($arr);

    echo '<hr>';
    $str = '123456798';
    echo $str;
    echo '<hr>';

    echo str_shuffle($str);
    echo '<br>';
    echo $str;