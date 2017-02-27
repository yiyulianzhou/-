<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    正则表达式
        1.定界符
        ~!@#$%^&*(){}<> /#
        2.原子
        是组成正则的最小单位，原子就是匹配一个字符
        2.1 普通字符
        数字/字母下划线 0~9 A~Z a~z _
        2.2 特殊字符
        使用特殊字符，需要转义才能正常使用
        '' "" / . * + ? | () & ^ \
        需要匹配\ 必须使用四根 \ 来转义
        2.3 非打印字符
        \f -- 分页符
        \r -- 回车符
        \n -- 换行符
        \t -- 制表符
        \v -- 垂直制表符
        2.4 通用字符
        \d 匹配任意一个十进制数字[0~9]
        \D 匹配任意一个十进制以外的字符

        \s 匹配任意一个空白字符 [空格 tab \f\r\n\t\v]
        \S 匹配任意一个除了空白字符意外的任意一个字符

        \w 匹配任意一个数字/字母/下划线[0-9 a-z A-Z _]
        \W 匹配任意一个数字/字母/下划线以外的字符
        (打死我，大写取反)
        2.5 原子表
        用中括号[]来表示自定义的原子，在以上方案无法满足时使用
        [abc] 匹配原子表中的任意一个字符
        [^abc] 匹配除了原子表中的任意一个字符

         3.元字符
         用来修饰其前面的原子出现的次数或者位置
         !(元字符不能单独出现)
         3.1 限定符
            *       匹配其前面 的原子出现 0次 1次 多次（不限次数）
            +       匹配其前面 的原子出现 1次 多次（至少一次）
            ?       匹配其前面 的原子出现 0次 1次（至多一次）
            {n}     匹配其前面 的原子出现 正好n次
            {n,}    匹配其前面 的原子出现 至少n次
            {n,m}   匹配其前面 的原子出现 至少n次，至多m次
         3.2 边界限制
         3.3 句号
         3.4 模式选择符
         3.5 模式单元
         3.6 后向引用
         4.模式修正符
        */
    $str = 'dfdbsbadfadfadfaf';
    $regex = '/\w*/';

    $str = 'cooooooooool';
    $regex = '/co*l/';

    $str = 'cool';
    $regex = '/co?l/';

    $str = 'cl';
    $regex = '/c\w{1,3}l/';

    $str = 'BBC';
    $regex = '/[ABC]{3}/';

    if (preg_match_all($regex,$str,$arr)) {
             echo '正则表达式<font size="5" color="green">'.$regex.'</font>匹配字串<font size="5" color="green">'.$str.'</font>成功';
             echo '<pre>';
             var_dump($arr);
         } else {
            echo '正则表达式<font size="5" color="green">'.$regex.'</font>匹配字串<font size="5" color="green">'.$str.'</font>失败';
         }