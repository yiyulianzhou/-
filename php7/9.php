<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    foreach 遍历数组(专业遍历数组三十年)
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
        100=>'一百'
        );
    echo '<pre>';
        print_r($arr);
    echo '<pre/>';

    //1.直接去取值
    //每次循环，将当前元素的值赋值给$value(此变量可以自定义名字)
    //并将数组指针向前移动一步，直到数组结束就停止遍历
    foreach ($arr as $value) {
        echo $value.'<br>';
    }
    echo '<hr>';
    //2.取得键值对
    //每次循环，将当前元素的键名赋值给$key,将值赋值给$val,其他同上
    foreach ($arr as $key => $val) {
        echo '['.$key.']=>'.$val.'<br/>';
    }
