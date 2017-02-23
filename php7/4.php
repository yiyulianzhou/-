<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    多维数组
        当某个数组元素的值，还是一个数组，那么该数组就是一个多维数组。
    */
    //声明一个二维数组
    $arr = array(
        'group1' =>array(
            '吴昊',
            '李刚',
            '老王'
            ),
        'group2'=>array(
            '朱俊杰',
            '周彬彬',
            '白磊'
            )
        );
    //取值
    echo $arr['group2']['2'];
    //添加第三组学员
    $arr['group3']=['孙斌','刘备','张飞'];

    //将班长添加到第二组
    $arr['group2'][] = '李斌';
    echo '<pre>';
        print_r($arr);
    echo '<pre/>';