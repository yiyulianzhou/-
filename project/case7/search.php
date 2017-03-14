<?php 
    //按分类形式生成的二级页
    require './init.php';
    $search = $_GET['s'];


    //按分类ID去查询商品数据
    $sql = "
    SELECT i.iname, g.gname, g.price, g.zan
    FROM ".PRE."goods g, ".PRE."image i
    WHERE g.id = i.goods_id AND i.cover=1 AND g.state=1 AND g.gname LIKE '%$search%'";
    $list = query($link, $sql);
    v($list);exit;
    
    //以下请自重! 
 ?>


