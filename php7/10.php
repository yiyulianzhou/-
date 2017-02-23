<?php 
    header("Content-type:text/html;charset=utf-8");
    $arr = array(
        'name'=>'seeker',
        'sex'=>'man',
        'age'=>18,
        'tel'=>'18516604560'
        );
    echo "UPDATE `user` set `name`='seeker','sex'='man','age'=18,`tel`='18516605660' WHERE `id`=1";
    echo '<hr/>';

    //变量的初始值
    $str = '';
    foreach($arr as $key => $val) {
        $str .= "`$key`='$val'";
    }
    $field = rtrim($str,',');
    echo "UPDATE `user` SET $field WHERE `id` = 1";