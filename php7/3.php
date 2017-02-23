<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    数组的特性
    0.数组的下标只能是字串或整型
    如果指定int或str以外的类型，php会进行强制转换
    */
    $arr = array(
        true =>1234,
        5.9 => 9999
        );
    echo '<pre>';
        print_r($arr);

    //1.索引数组的特性
        //1).下标是从当前最大下标值+1
        //2).出现同名下标，后者覆盖前者
        $arr1 = array(11,22,33,44,55,100=>'一百个字','哈哈',3=>'1234567');
        $arr1[] = '呵呵哒';
        print_r($arr1);

    //2.关联数组的特性
        //1).出现同名下标，后者覆盖前者
        $a['name'] = 'jack';
        $a['sex'] = 'man';
        $a['name'] = 'tom';
        print_r($a);