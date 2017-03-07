<?php 
    //range() 
    //参数1：起始值
    //参数2：结束值
    //参数3: 可选步数
    $arr = range(1,10);
    echo '<pre>';
        print_r($arr);
    echo '<pre/>';
    
    //array_reverse 使用一个数组作为参数，返回一个与参数数组元素顺序相反的数组。
    $arr2 = array_reverse($arr);

    echo '<pre>';
        print_r($arr2);
    echo '<pre/>';
 ?>