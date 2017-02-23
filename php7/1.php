<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    数组
        数据就是一组数，是键值对组成的语言结构 key/value
    两方面：
        1.声明和使用不同类型的数组
        2.重点，学会遍历数组
    声明数组：
        数组分为：
            索引数组：键 数字
                默认是从0下标开始，也可以指定其他下标
            关联数组：键 字串
                下标是字串，可以使用中文，但不推荐(编码问题)
    */
    //索引数组
    $arr[] = '第1页的内容';
    $arr[] = '第2页的内容';
    $arr[] = '第3页的内容';
    $arr[] = '第4页的内容';
    //echo $arr;//不可用字串的形式打印输出
    var_dump($arr);
    //key和value使用=>来连接
    echo '<pre>';
    print_r($arr);

    //访问数组元素
    echo $arr[2];

    echo '<hr/>';
    //关联数组
    $a['name'] = 'seeker';
    $a['sex'] = 'man';
    $a['age'] = '18';
    $a['tel'] = '185166004560';

    print_r($a);

    //访问索引数组元素
    echo $a['tel'];