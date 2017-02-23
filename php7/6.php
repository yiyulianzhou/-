<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    数组的遍历
        从头到尾
    */
    //for遍历数组
        //1.只能遍历索引数组
        //2.索引数组只能遍历连续的数组
        $arr = array('一','二','三',55=>'四','五',100=>'一百');
        //$arr = array('name'=>'jack','sex'=>'man','age'=>18);
        //count(要统计的数组,可选:是否递归统计) 统计数组元素个数
        $length = count($arr);

        // echo $length;

        for ($i = 0;$i < $length; $i++) {
            echo '第'.($i+1).'次循环：'.$arr[$i].'<br/>';
        }

        //使用函数来遍历不连续的索引数组
        echo '<pre>';
            print_r($arr);
        echo '<pre/>';
        $a = array_values($arr);
        echo '<pre>';
            print_r($a);
        echo '<pre/>';