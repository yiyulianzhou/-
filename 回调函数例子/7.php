<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    回调函数
        定义：在调用函数时，将另外一个函数当作参数，并在函数体内调用，
        被当作参数传递的这个函数就是回调函数。
    */
    //回调函数的例子
    //简单的数学操作
    // function add ($a,$b) {
    //     return $a + $b;
    // }
    // function reduce ($a,$b) {
    //     return $a - $b;
    // }
    // function calc ($funcName,$i,$j) {
    //     return $funcName($i,$j);
    // }
    // echo call_user_func_array('add',array(5,3));
        //回调函数的例子
    function studying ($user) {
        echo $user.' is studying';
    }
    function playing () {
        echo $user.' is playing';
    }
    function doWhat ($funcName) {
        //通过可变函数的形式进行调用
        $funcName();
    }
   echo  call_user_func('studying','rose');


 ?>