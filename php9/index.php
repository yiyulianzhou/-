<?php 
    header("Content-type:text/html;charset=utf-8");

    echo '<pre>';
        print_r($_POST);
    echo '<pre/>';

    //用户名：长度4-16，字母开头，允许数字字母下划线组成，不区分大小写
    $regex1 = '/^[a-zA-Z][\w]{3,15}/';
    //密码：长度4-32位
    $regex2 = '/^[\S]{4,32}$/';
    //手机：长度11位，合法的手机号
    $regex3 = '/^1[^0129]\d{9}$/';
    //email:输入合法的email
    $regex4 = '/[\w\.]+@\w+(\.\w+)+(\.\w+)*/i';

    //username
    if (!preg_match($regex1,$_POST['username'])) {
        echo '用户名不合法！<br/>';
    }else{
        echo '用户名验证通过！<br/>';
    }
