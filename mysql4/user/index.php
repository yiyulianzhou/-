<?php 
    header("Content-type:text/html;charset=utf-8");
    include './config.php';
    //天龙 1.2.3.4
    $link = mysqli_connect(HOST,USER,PWD) or die('数据库连接失败鸟...');
    //选库和设字符集
    mysqli_select_db($link,DB);
    mysqli_set_charset($link,CHAR);
    //5.
    $sql = "select `id`,`name`,`sex`,`age`,`province` pro from ".PRE."user";
    //6.
    $result = mysqli_query($link,$sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $list = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学员信息表</title>
</head>
<body>
    <ul>
        <li><a href="./index.php">首页</a></li>
        <li><a href="./add.php">添加</a></li>
    </ul>
    <table width="800" border="1" cellspacing="0" cellpadding="0">
        <caption><h2>学员信息表</h2></caption>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>省份</th>
            <th>操作</th>
        </tr>
        <?php foreach($list as $val): ?>
        <tr>
            <td><?= $val['id']?></td>
            <td><?= $val['name']?></td>
            <td><?= $val['sex']?></td>
            <td><?= $val['age']?></td>
            <td><?= $val['pro']?></td>
            <td>
                <a href="./action.php?a=edit&id=<?php echo $val['id'] ?>">编辑</a>
                <a href="./action.php?a=del&id=<?php echo $val['id'] ?>">删除</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>