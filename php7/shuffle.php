<?php 
    header("Content-type:text/html;charset=utf-8");
    $pictures = array(
        '33.gif','44.gif','55.gif','66.gif'
        );
    shuffle($pictures);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>网站首页</h2>
    <div>
        <img src="./imgs/<?php echo $pictures[0];?>" alt="">
    </div>
</body>
</html>