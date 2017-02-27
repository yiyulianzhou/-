<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    正则表达式
        定义：
            正则表达式也叫作模式表达式
            正则配合特定的函数，来实现字符串的匹配，查找，替换，分割等等操作。
            正则本质上也是一个字符串
    什么时候用正则?
        当字符串函数不能搞定某些操作时，就需要请正则出山了
        如：匹配手机号，邮箱验证，日期，账号密码等。
    与Perl语言兼容的 正则表达式函数:
        1.preg_match()
            执行正则表达式匹配
        2.preg_match_all()
            执行全局正则表达式匹配
        3.preg_replace()
            执行正则表达式的搜索和替换
        4.preg_split()
            用正则表达式分割字符串
        5.preg_grep()
            返回与模式匹配的数组单元
        6.preg_replace_callback()
            用回调函数执行正则表达式的搜索和替换


    */
    $str = "我在学习PHP";
    $regex = '/PHP/';

    if(preg_match($regex,$str,$arr)) {
        echo '正则表达式<font size="5" color="green">'.$regex.'</font>匹配字串<font size="5" color="green">'.$str.'</font>成功';
        echo '<pre>';
        print_r($arr);
    } else {
        echo '正则表达式<font size ="5" color="red">'.$regex.'</font>匹配字串<font>'.$str.'</font>失败';
    }
   
  
 ?>