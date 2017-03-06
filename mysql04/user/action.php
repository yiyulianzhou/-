<?php 
    require './config.php';
    //天龙 1.2.3.4
    $link = mysqli_connect(HOST,USER,PWD) or die('数据库连接失败鸟...');
    //选库和设字符集
    mysqli_select_db($link,DB);
    mysqli_set_charset($link,CHAR);
    var_dump($_GET);
    //接收用户动作
    $a = $_GET['a'];
    switch ($a) {
        case 'del':
            # code...
            //id
            $id = $_GET['id'];
            echo "我要删除id为{$id}的家伙<br/>";
            //5.
            $sql = "delete from ".PRE."user where id = $id";
            //6.
            $result = mysqli_query($link,$sql);
            if ($result && mysqli_affected_rows($link)) {
                echo '删除成功！';
                echo '<meta http-equiv="refresh" content="3;url=index.php">';
            }
            break;
        
        default:
            # code...
            break;
    }
 ?>