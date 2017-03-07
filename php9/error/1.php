<?php 
    header("Content-type:text/html;charset=utf-8");

    //语法错误
    //echo '一个好的程序员是那种过单行线马路都要往两边看的人。（Doug Linder）'
    //echo '程序有问题时不要担心。如果所有的东西都没有问题，你就失业了（软件工程的Mosher定律）';
    // $arr = array(
    //     11;
    //     22;
    //     33;
    //     );
    // sum($a, $b)
    // {
    //     return $a + $b;
    // }

    // //运行时错误
    // echo $a;
    // echo strlen();
    // foreach($arr as $key => $value) {
    //     echo $key.$value;
    // }
    //aabbcc();

    //逻辑错误
    $a = 50;
    if ($a = 1) {
        echo '对的';
    } else {
        echo '错误的';
    }
    if ($a !== 1); 
    echo '这句话永远都会被打印出来，你信吗？';