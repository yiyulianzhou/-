<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    7.回调函数
        将一个函数名作为参数，被作为参数传递的这个函数，就是回调函数
        其实就是在一个函数的内部，使用变量函数
    */
    //求和
    function sum($n1,$n2) {
        return $n1 + $n2;
    }

    //求积
    function mul($n1,$n2) {
        return $n1 * $n2;
    }

    //声明回调函数
    function result($n1,$n2,$callback='') {
        return $callback($n1,$n2);
    }

    //使用回调函数
    echo result(1,2,'sum');
    echo '<hr/>';

    //也可以使用系统提供的函数来实现回调函数
    //call_user_func_array
    //参1 要回调的函数名
    //参2 回调函数中的参数，以数组的形式传递
    echo call_user_func_array('sum',array(10,20));
    echo call_user_func_array('mul',array(10,20));

    echo '<hr>';
    echo call_user_func('sum',10,20);