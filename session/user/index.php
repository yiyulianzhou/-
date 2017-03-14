<?php 
    header("content-type:text/html;charset=utf-8");
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    require './config.php';

    //1.连接数据库
    //2.判断错误
    //3.选库
    $link = mysqli_connect(HOST,USER,PWD,DB) or die('数据库你肿么了....');
    //4.设置字符集
    mysqli_set_charset($link,'utf8');
    //5.SQL语句
    $sql = "SELECT `id`,`name`,`sex`,`age`,`province` pro FROM ".PRE."user";
    //6.发送SQL语句
    $result = mysqli_query($link,$sql);
    //7.处理结果集
    if ($result && mysqli_num_rows($result)>0) {
        $user_list = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    mysqli_free_result($result);
    //8.关闭MYSQL连接
    mysqli_close($link);

    // echo '<pre>';
    //     print_r($user_list);
    // echo '</pre>';
?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>用户信息表</h1>
    <ul>
        <li><a href="./index.php">首页</a></li>
        <li><a href="./add.php">添加用户</a></li>
    </ul>
    <table border="1" cellspacing="0" width="600" align="center">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>性别</th>
            <th>贵庚</th>
            <th>省份</th>
            <th>操作</th>
        </tr>
        <!-- 此处开始遍历数据 -->
        <?php foreach ($user_list as $key => $val): ?>
            <tr>
                <td><?php echo $val['id'] ?></td>
                <td><?php echo $val['name'] ?></td>
                <td>
                <?php
                switch ($val['sex']) {
                    case 2:
                        echo '保密';
                        break;
                    case 1:
                        echo '男';
                        break;
                    case 0:
                        echo '女';
                        break;
                    
                }
                ?>
                </td>
                <td><?php echo $val['age'] ?></td>
                <td><?php echo $val['pro'] ?></td>
                <td>
                    <a href="./edit.php?id=<?php echo $val['id'] ?>">编辑</a>
                    <a href="./action.php?a=del&id=<?php echo $val['id'] ?>">删除</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>

