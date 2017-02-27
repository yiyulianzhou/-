<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    回调函数
        定义：在调用函数时，将另外一个函数当作参数，并在函数体内调用，
        被当作参数传递的这个函数就是回调函数。
    */
    //回调函数的例子
    function studying () {
        echo 'studying';
    }
    function playing () {
        echo 'playing';
    }
    function sing () {
        echo 'sing';
    }
    function doWhat ($funcName) {
        echo "I am ".$funcName();
    }
    doWhat('studying');
    
 ?>