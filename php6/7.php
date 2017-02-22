<?php 
    header("Content-type:text/html;charset=utf-8");
   /*
    8.递归函数
        自己调用自己，也可以理解为自我复制的过程
        但是每次调用自己都有变化
        是函数自我循环的一种方法

        目录的递归操作
        无限级分类

        修改php.ini配置来改变 函数的嵌套层数
        xdebug.max_nesting_level = 300

   */
        //递归做加法
        function sum($n) {
            if($n > 0) {
                return $n + sum($n -1);            
            }
        }
        echo sum(3);
        echo '<br>';
        echo sum(100);

        echo '<hr>';

        //阶乘 5! 1*2*3*4*5
        function cheng($n) {
            echo $n.'<br>';
            if($n > 0) {
                return $n * cheng($n-1);
            }

            //注意！！！
            //当$n == 0,返回null,就会递归得到0
            if ($n ==0) {
                return $n = 1;
            }
        }
        echo cheng(5);