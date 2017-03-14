<?php 
    header("Content-type:text/html;charset=utf-8");
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   /*
    php操作mysql
    天龙八步
   */
    //1.连接数据库
    $link = mysqli_connect('localhost','root','123456');
    //var_dump($link);
    //参1：主机地址 本机默认是localhost
    //参2：用户名
    //参3：密码
    //参4：可选 数据库

    //2.判断错误(判断是否连接成功)
    //mysqli_connect_errno();//接收错误号 成功返回0 失败返回错误号
    //mysqli_connect_error();//接收错误信息 成功返回null ,失败返回错误信息
    if (!$link) {
        exit(mysqli_connect_errno().':'.mysqli_connect_error());
    }

    //3.选库
    mysqli_select_db($link,'s60');
    //参1：mysql连接标识
    //参2：数据库

    //4.设置字符集
    mysqli_set_charset($link,'utf8');
    //参1：连接标识
    //参2：字符集

    //5.准备sql
    //update s60_user set name = '吸血鬼' where id = 9;
    //delete from s60_user where id = 8;
    //insert into s60_user values (null,'小黑','1','20','上海');
    //删除：
    $sql = "delete from s60_user where id = 8";

    //6.发送
    $result = mysqli_query($link,$sql);
    //参1：连接标识
    //参2：sql语句
    //返回值：
    //成功：查询：结果集对象 增删改：true
    //失败：false
   

    //7.处理执行结果
    //步骤较多稍后介绍
     if ($result && mysqli_affected_rows($link) > 0) {
        echo '删除成功！';
        echo mysqli_affected_rows($link).'row affeced';
    } else {
        echo '删除失败！';
    }

    //8.关闭MYSQL连接
    mysqli_close($link);


