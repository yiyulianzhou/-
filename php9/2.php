<?php 
    header("Content-type:text/html;charset=utf-8");

    function tags($str)
    {
        $new_str = '';
        $regex = '/<.*?>/';

        //把字串$str中，匹配到的regex的值，替换为''空字符串
        $new_str = preg_replace($regex,'',$str);
        return $new_str;
    }
    $str = '<b>跟我嗨起来！左边的朋友，右边的朋友，请举起你们的双手，让我看到你们好吗？动刺大刺，动刺大刺，AV8D，上面的朋友和我一起，万，吐，死瑞，佛，康忙卑鄙来死狗，苍茫的天涯是我滴爱…………</b><i>问：有没有一个让你热血沸腾激动不已的女人?答:老干妈</i><u>唯累过，方得闲；唯苦过，方知甜。</u>';
    echo $str;
    echo '<hr/>';
    $new_str = tags($str);
    echo $new_str;
    
 ?>