<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    while 遍历数组
        list() /each()
    */
    //list() 把数组中的值赋给一些变量(数组必须是连续的索引数组,必须从0开始)
    //$arr = array('name'=>'jack','age'=>18,'一','二','三',55=>'四',五,100=>'100');
    $arr = array('一','二','三',55=>'四','五','num'=>'一百');
    echo '<pre>';
        print_r($arr);
    echo '<pre/>';

    list($a,$b,$c,$d) = $arr;
    echo $a;
    echo $b;
    echo $c;
    echo $d;
    echo '<hr/>';

    //each() 返回数组中当前的键值对，并将数组的指针向前移动一步
    //返回值 由四个元素组成的数组
    //0 /1 /kay /value
    print_r(each($arr));
    print_r(each($arr));
    print_r(each($arr));
    print_r(each($arr));
    print_r(each($arr));
    print_r(each($arr));
    print_r(each($arr));
