<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    4.可变参数个数的函数
        在函数中获取任意数量的参数的函数，并在函数中使用
        func_num_args() //返回实参个数
        func_get_arg() //通过索引获取1个参数的值，从0开始
        func_get_args() //返回所有参数，以数组的形式

        系统的可变参数函数
        min() max()    
    */
    echo min(1,5,9,66,5,0);
    echo max(1,5,9);
    echo '<hr>';

    //求和
    function sum() {
        //返回所有的参数(数组)
        //$arr = func_get_args();
        //$len = count(func_get_args());

        //将参数的个数赋值给$len
        $len = func_num_args();
        //变量的初始值
        $res =0;
        for($i=0;$i<$len;$i++){
            $res +=func_get_arg($i);
        }
        return $res;
    }
    echo '<pre>';
        print_r(sum(10,20,30,40,50));
    echo '</pre>';
