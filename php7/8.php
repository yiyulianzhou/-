<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    while 遍历数组

    */
    $arr = array(
        'name'=>'jack',
        'sex'=>'man',
        'age'=>18,
        '一',
        '二',
        '三',
        55=>'四',
        '五',
        100=>'一百');

    echo '<pre>';
        print_r($arr);

    while (list($key,$value) = each($arr)) {
        echo $key.'是'.$value.'<br>';
    }
