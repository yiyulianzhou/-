<?php 
    header("Content-type:text/html;charset=utf-8");
    //设置时区
    date_default_timezone_set('PRC');
    //获取时区
    echo date_default_timezone_get();

    echo '当前的UNIX时间戳：'.time();
    echo '<br/>';
    echo '我的生日'.mktime(11,42,55,10,24,1998);//(时分秒日月年)

    echo '<hr/>';
    echo strtotime('now');
    echo '<br/>';
    echo strtotime('+1 day');
    echo '<br/>';
    echo strtotime('-1 day');
    echo '<br/>';
    echo strtotime('+1 week');

    echo '<hr/>';
    echo date('YmdHis');
    echo '<br/>';
    echo date('Y-m-d H:i:s');
    echo '<br/>';
    echo date('Y年m月d日 H时i分s秒');
    echo '<hr>';

    /*
     date() 常用函数
     常用参数：
        Y：四位数年  m:月01-12 n:月1-12
        d: 天01-31   j:天1-31  H:时24时制
        h:小时12制   i:分钟00-59 s:秒00-59
        w:星期几0-6  A:上午AM或下午PM a:上午am或下午pm
        getdate() 获取日期/时间信息
     */
    // 返回的关联数组中的键名单元
    //"seconds" 秒的数字表示 0 到 59
    //"minutes" 分钟的数字表示 0 到 59
    //"hours"   小时的数字表示 0 到 23
    //"mday"    月份中的第几天的数字表示1 到 31
    //"wday"    星期中第几天的数字表示0(周日) 到6 (周六)
    //"mon"     月份的数字表示 1  到 12
    //"year"    4 位数字表示的完整年份 如：1999 或 2013
    //"yday"    一年中第几天的数字表示 0 到 365
    //"weekday" 星期几的完整文本表示 Sunday 到 Saturday
    //"month"   月份的完整文本表示，比如 January 或 March January 到December
    //'0' 自从 Unix 纪元开始至今的秒数，和time() 的返回值以及用于date()的值类似

    echo '<pre>';
        print_r(getdate());
    echo '<pre/>';
 ?>