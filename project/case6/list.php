<?php 
    //按分类形式生成的二级页
    require './init.php';
    //接收用户点击过来的分类ID
    if (empty($_GET['cate_id'])) {
        $cate_id = 1;
    }else{
        $cate_id = $_GET['cate_id'];
    }

    //将此ID下的所有子孙的ID全部都查出来
    
    //1.拼接自己的 "path,id," 条件
    $sql = "SELECT cname,concat(path,id,',') bpath FROM ".PRE."category WHERE id='$cate_id'";
    $row1 = query($link, $sql);
    $cname = $row1[0]['cname'];
    $bpath = $row1[0]['bpath'];

    // //2.按照当前的bpath,查询出所有的子孙的ID
    // $sql = "SELECT id FROM ".PRE."category WHERE path LIKE '$bpath%'";
    // $ids = query($link, $sql);
    // // p($ids);
    
    // //得到每个子分类的ID,就可以用in查询来查每个分类下的商品情况
    // // "SELECT * FROM s47_goods WHERE cate_id in(1,2,6,14,16)"
    
    // //生成in查询的id们
    // $id_list = "$cate_id,";
    // foreach ($ids as $val) {
    //     $id_list .= $val['id'].',';
    // }
    // $id_list = rtrim($id_list,',');
    // // echo $id_list;
    
    // //按分类ID去查询商品数据
    // $sql = "
    // SELECT i.iname, g.gname, g.price, g.zan
    // FROM ".PRE."goods g, ".PRE."image i
    // WHERE g.id = i.goods_id AND i.cover=1 AND g.state=1 AND cate_id in($id_list)";
    // $list = query($link, $sql);
    // // v($list);exit;

    //按分类ID去查询商品数据
    $sql = "
    SELECT i.iname, g.gname, g.price, g.zan
    FROM ".PRE."goods g, ".PRE."image i
    WHERE g.id = i.goods_id AND i.cover=1 AND g.state=1 AND cate_id in(SELECT id FROM ".PRE."category WHERE path LIKE '$bpath%')";
    $list = query($link, $sql);
    // v($list);exit;
    
    //以下请自重! 
 ?>


