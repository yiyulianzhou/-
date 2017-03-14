<?php 
    //此页面会进行 增 删 改
    require './config.php';

    echo '<pre>';
        print_r($_GET);
        print_r($_POST);
    echo '</pre>';
    // exit;

    // 天龙1.2.3步
    $link = mysqli_connect(HOST,USER,PWD,DB) or die('数据库连接失败鸟....');
    //4
    mysqli_set_charset($link,'utf8');

    $a = $_GET['a'];
    switch ($a) {
        case 'edit':
            $id = $_POST['id'];
            echo '正在编辑ID为'.$id.'的家伙..<br>';
            $set = '';
            foreach ($_POST as $key => $val) {
                $set .= "`$key`='$val',";
            }
            $set = rtrim($set,',');
            $sql = "UPDATE ".PRE."user SET $set WHERE `id`='$id'";
            $result = mysqli_query($link,$sql);
            if ($result && mysqli_affected_rows($link)>0) {
                echo '编辑成功';
                echo '<br>3秒后跳转到首页 或点击此处: <a href="./index.php">回首页</a>';
                echo '<meta http-equiv="refresh" content="3;./index.php">';
            }else{
                echo '编辑失败,请重试';
                //失败,应该回到之前页面(来之前的页面)
                echo '<meta http-equiv="refresh" content="3;'.$_SERVER['HTTP_REFERER'].'">';
            }
            break;

        case 'add':
            echo '正在添加用户....';
            $keys = '';
            $values = '';
            //遍历得到的post 生成SQL语句的条件
            foreach ($_POST as $key => $val) {
                $keys .= "`$key`,";
                $values .= "'$val',";
            }
            //抹去右边的逗号
            $keys = rtrim($keys,',');
            $values = rtrim($values,',');

            //5
            $sql = "INSERT INTO ".PRE."user ($keys) VALUES($values)";
            //6
            $result = mysqli_query($link,$sql);
            //7
            if ($result && mysqli_affected_rows($link)>0) {
                echo '添加成功 ID为'.mysqli_insert_id($link);
                echo '<br>3秒后跳转到首页 或点击此处: <a href="./index.php">回首页</a>';
                echo '<meta http-equiv="refresh" content="3;./index.php">';
            }else{
                echo '添加失败,请重试';
                //添加失败,应该回到添加页面(来之前的页面)
                echo '<meta http-equiv="refresh" content="3;'.$_SERVER['HTTP_REFERER'].'">';
            }
            break;

        case 'del':
            //删除动作
            $id = $_GET['id'];
            echo '我要删除ID为'.$id.'的家伙<br>';
            //5
            $sql = "DELETE FROM ".PRE."user WHERE `id`='$id'";
            //6
            $result = mysqli_query($link,$sql);
            //7
            if ($result && mysqli_affected_rows($link)>0) {
                echo '删除成功! 3秒后跳转到首页 或点击此处立即跳转<a href="./index.php">回首页</a>';
                echo '<meta http-equiv="refresh" content="3;index.php">';
            }else{
                echo '删除失败!';
                echo '<meta http-equiv="refresh" content="3;index.php">';
            }
            break;
        

    }

    //8.关闭连接
    mysqli_close($link);



