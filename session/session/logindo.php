<?php 
    header("content-type:text/html;charset=utf-8");
    session_start();
    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>';

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];


    // $sql = "SELECT id,name,pwd FROM user WHERE name='$name'";
    $arr = array(
        'id'=>'1',
        'name'=>'admin',
        'pwd'=>'123456',
        );

    //判断用户信息是否正确
    if ($name == $arr['name'] && $pwd == $arr['pwd']) {
        //不记录密码
        unset($arr['pwd']);
        //将查询到的用户信息存入一个session中
        $_SESSION['home'] = $arr;

        echo '登录成功';
        echo '<meta http-equiv="refresh" content="1;url=./index.php">';
    }else{
        echo '登录失败';
        echo '<meta http-equiv="refresh" content="3;url='.$_SERVER['HTTP_REFERER'].'">';
    }
    



