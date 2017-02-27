<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    回调函数
        定义：在调用函数时，将另外一个函数当作参数，并在函数体内调用，
        被当作参数传递的这个函数就是回调函数。
    */
    //usort()使用用户自定的函数对数组中的值进行排序
    $arr = array(1,5,5,123,89);
    usort($arr,'cmp');
    //自己定义排序规则
    function cmp($a,$b) {
        if($a == $b){
            return 0;
        }
      return ($a>$b)?-1:1;
    }
    echo '<pre>';
        print_r($arr);
    echo '<pre/>';
    
 ?>