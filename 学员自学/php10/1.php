<?php 
    header("Content-type:text/html;charset=utf-8");
    //检查GD模块文件是否存在
    //D:\wamp\bin\php\php5.6.19\ext
    //检查GD模块是否开启
    echo '<pre>';
        print_r(phpinfo());
    echo '<pre/>';

    //开启GD模块
    //extension=php_gd2.dll

    //六脉神剑
    //创建画布
    //准备颜色
    //填充背景
    //作画
    //保存，输出
    //关闭资源/销毁(释放内存)