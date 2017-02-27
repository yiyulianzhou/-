<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    超全局数组
    $GLOBALS 包含以下所有
    超全局数组变量：

    
        $_GET   通过URL参数传递给脚本的变量数组
        $_POST  通过HTTP post 方式传递的变量数组
        $_FILES 文件上传信息
        $_SERVER 服务器和执行环境等信息
        $_COOKIE 通过HTTP cookies 的方式传递的变量数组，用于存储一些用户的登录信息
        $_SESSION 当前脚本可用的session变量数组，一般用于存储购物车信息

        $_ENV 存储的是系统环境变量信息
        $_REQUEST 存储着get/post/cookie传来的信息

        -----------------
        了解$_SERVER里的元素
        $_SERVER["SERVER_NAME"]     服务器主机名
        $_SERVER["REQUEST_URI"]     当前文件的URL地址
        $_SERVER["HTTP_REFERER"]    上一页的URL地址


    */
    //var_dump($_ENV);
    echo $_SERVER['SERVER_NAME'];
    $arr = array(1,2,3,4,5,6);
    $_POST = $arr;
    function test() {
        echo '<pre>';
            print_r($arr);
            echo '<hr/>';
            print_r($_POST);
        echo '<pre/>';
    }
    test();

    echo '<hr/>';
    echo '<pre>';
    print_r($GLOBALS);
 ?>