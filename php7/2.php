<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    数组的几种声明方式
    */
    //1.直接赋值
    //索引：
    $a[] = 10;
    $a[] = 'haha';
    //关联
    $b['app1'] = '微信';
    $b['app2'] = '手机QQ';

    //使用语言结构array()
    //1).未指定下标的方式
    //默认从0开始，使用逗号分隔值
    $c = array(2,3,38,250,'呵呵');
    echo '<pre>';
        print_r($c);
    //2) 指定下标的方式
    $d = array(1=>'10',2=>'20',3=>99);
    print_r($d);
    //var_dump($d);
    $e = array('app1'=>'微信','app2'=>'手机QQ','app3'=>'陌陌');
    print_r($e);

    //从php5.4开始，可以使用[],来替代array()
    $f = ['中国','米国','岛国','宇宙国'];
    print_r($f);
    $g = ['p1'=>'小米','p2'=>'华为','p3'=>'魅族'];
    print_r($g);

    echo '<hr>';
    //3.使用其他函数来返回一个数组
    //range() //生成一个指定范围的数组
    //参数1 序列的第一个值
    //参数2 序列的最后一个值
    //参数3 可选：步长
    $arr = range(' ','z');
    print_r($arr);

    //array_fill() 使用指定的值来填充数组
    //参1 开始的索引
    //参2 插入元素的数量
    //参3 用来填充的值
    $arr1 = array_fill(0,5,'DDS');
    print_r($arr1);