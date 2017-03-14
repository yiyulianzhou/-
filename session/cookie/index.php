<?php 
    header("content-type:text/html;charset=utf-8");

    /*
    COOKIE
    setcookie()
    参1 必填 设置cookie的name
    参2 cookie 的值
    参3 有效期 当前之间戳+多少秒 time()+60*60
    参4 路径 /表示全部生效  指定路径,即该路径下文件生效
    参5 域名 www.qq.com  mail.qq.com image.qq.com  *.qq.com
    参6 是否加密
    参7 是否是通过http协议
    */
   
   if (empty($_COOKIE)) {
        echo '小朋友,第一次来吧?';
        $content = uniqid();
        //往浏览器中设置一个cookie
        setcookie('LAMP_S47',$content,time()+20,'/');
        echo '<pre>';
            print_r($_COOKIE);
        echo '</pre>';
        //测试以下cookie有没有
        echo '<a href="test.php">test.php</a>';
   }else{
        echo '呦,您是常客啊!';
   }
   
   



