<?php
     /**
     *分页函数 page
     *@access $total 总数
     *@access $num   每页显示条数
     *@access $type  分页数字按钮显示的个数
     *@param  $list['offset']   偏移量
     *@param  $list['page']     当前页数
     *@param  $list['pages']    总页码数   
     *@param  $list['str']      分页按钮
     */
    function page($total,$num,$type=1){
        //获取总页数赋值到返回数组里面
        $list['pages'] = $pages = ceil($total/$num);
        //利用parse_str()将$_SERVER['QUERY_STRING']url参数解析到一个数组里面
        parse_str($_SERVER['QUERY_STRING'],$pap);
        //获取url参数里面的当前页码 p
        $page = isset($pap['p'])?$pap['p']:1;
        //限制当前页的范围
        $page = max($page,1);
        $page = min($page,$pages);
        //将我们的页码数页复制到返回数组中
        $list['page'] = $page;
        //计算偏移量赋值到返回数组里面
        $list['offset'] = $offset = ($page-1)*$num;
        //通过$_SERVER 拼接动态url地址
            //1.取出协议名
            $protocol = $_SERVER['SERVER_PROTOCOL'];
            $protocal = explode('/',$protocol)[0];
            //2.将协议名转换为小写
            $protocal = strtolower($protocal);
            //3.取出SCRIPT_NAME
            $name = $_SERVER['SERVER_NAME'];
            //4.取出目录名
            $pathname = $_SERVER['SCRIPT_NAME'];
            //4.拼装
            $url = $protocal.'://'.$name.$pathname.'?';
        //将我们的url参数赋值给我们的所有分页按钮
        $first = $end = $prev = $next = $pap;
        //定义一个分页按钮
        $str = '';
        //给首页赋值产生分页按钮
        $first['p'] = 1;
        $str = '<a href="'.$url.http_build_query($first).'"><b>start </b></a>';
        //判断上下页的范围
        $prev['p'] = max($page-1,1);
        $next['p'] = min($page+1,$pages);
        //产生上一页按钮
        $str .= '<a href="'.$url.http_build_query($prev).'"> 上一页 </a>';
        //产生分页数字按钮并限制范围
        $start = max($page-$type,1);
        $exit = min($page+$type,$pages);
        //循环产生分页数字按钮
        for($i=$start;$i<=$exit;$i++){
            $pap['p'] = $i;
            if($page==$pap['p']){
                $str .= '<a href="'.$url.http_build_query($pap).'" style="color:red;"> ['.$i.'] </a>';
            }else{
                $str .= '<a href="'.$url.http_build_query($pap).'"> ['.$i.'] </a>';
            }
        }
        //产生下一页按钮
        $str .= '<a href="'.$url.http_build_query($next).'"> 下一页 </a>';
        //产生尾页按钮
        $end['p'] = $pages;
        $str .= '<a href="'.$url.http_build_query($end).'"><b> end</b></a>';
        //将分页按钮复制到返回数组中
        $list['str'] = $str;
        //将我们的数组返回出去
        return $list;
    }
?>
