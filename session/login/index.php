<?php 
    header("content-type:text/html;charset=utf-8");

    /*
    在页面之间传递数据有那些方法
    get / post
    可以在两个页面之间传递,只有指定了接受页面,才能接收到
    file 把数据存到文件之中,多个页面中去读取这个文件
    database 把书插入到数据表,想在哪就在哪用
    cookie
    session
     */
?>


<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>
<body>
    <h1>我是首页</h1>
    <?php if (!file_exists('./login.info')): ?>
        <span>点击此处去登录</span>
        <a href="./login.html">[登录]</a>
    <?php else: 
        //将登录文件中的信息读取出来
        $str = file_get_contents('./login.info');
        //反串行化
        $arr = unserialize($str);
        // echo '<pre>';
        //     print_r($arr);
        // echo '</pre>';
    ?>
        欢迎 <?php echo $arr['name'] ?> 来到本网站 &nbsp;&nbsp;&nbsp; <a href="./logout.php">[登出]</a>
    <?php endif ?>
</body>
</html>


