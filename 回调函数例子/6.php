<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    回调函数
        定义：在调用函数时，将另外一个函数当作参数，并在函数体内调用，
        被当作参数传递的这个函数就是回调函数。
    */
    //回调函数的例子
    //简单的数学操作
    function add ($a,$b) {
        return $a + $b;
    }
    function reduce ($a,$b) {
        return $a - $b;
    }
    function calc ($funcName,$i,$j) {
        return $funcName($i,$j);
    }
    echo calc('add',3,5);
    echo '<br/>';
    echo calc('reduce',3,5);
    //系统中使用回调函数的形式也很多
    echo '<hr/>';
    //array_map的使用
    $arr = array(1,2,3,4,5);
    function test1($i) {
        return $i*2;
    }
    $res = array_map('test1',$arr);
    print_r($arr);
    echo '<hr/>';
    print_r($res);

    //array_walk的使用
    function test2(&$var) {
        $var*=3;
        return $var;
    }
    array_walk($arr,'test2');
    echo '<hr/>';
    print_r($arr);
    //array_filter用回调函数对数组中的元素进行过滤
    $new = array_filter($arr,'test3');
    echo '<hr/>';
    print_r($new);
 ?>