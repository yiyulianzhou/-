S<?php 
    /*
        函数名：
        可变函数
            函数的标示符可以由变量来充当
    */
    function sayHello($name) {
        echo "hello,$name";
    }
    //sayHello('mada');
    // $func_name = 'sayHello';
    // $func_name('mada');
    //作用：可以动态的确定当前调用的函数名
    $funcs = array(
        'jpg'=>'imagecreatefromjpeg',
        'png'=>'imagecreatefrompng',
        'gif'=>'imagecreatefromgif'
        );
    $file_name = 'xxx.jpg';//'xxx.png' 'xxx.gif'
    //获得图片的类型
    $imgType = 'jpg';
    $func_name = $funcs[$imgType];
    //$func_name();
    $sayName = function (){
        echo '我是匿名函数';
    };
    var_dump($sayName);
