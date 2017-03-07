<?php 
    header("Content-type:text/html;charset=utf-8");

    //匹配国内手机号
    $str = "12345678905";
    $regex = '/^1[^0129]\d{9}$/';

    //匹配0.0~9.9
    $str = "5.5";
    $str = "5";
    $regex = '/^(\d)(\.\d)$/';

    //匹配十六进制0x 0x
    $str = "0xfp";
    $regex = '/^0[xX][0-9a-fA-F]$/';

    //匹配0-255 0 5 15 100 254
    $str = "254";
    $regex = '/^(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])$/';

    //匹配时间 23:59:59
    $str = "09:59:59";
    $regex = '/([01]\d|[2][0-3]):[0-5]\d:[0-5]\d/';
    
    //匹配视频源地址
    $str = '<embed src="http://player.youku.com/player.php/sid/XMTUzODUzNDM2MA==/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>';
    $regex = '/(src)=(\")(.*?)(\")/';

    if (preg_match($regex, $str, $arr)) {
        echo '正则表达式<font size="5" color="green">'.$regex.'</font>匹配字串<font size="5" color="green">'.htmlentities($str).'</font>成功';
        echo '<pre>';
        print_r($arr);
        var_dump($arr);
    } else {
        echo '正则表达式<font size="5" color="red">'.$regex.'</font>匹配字串<font size="5" color="red">'.$str.'</font>失败';
    }
 ?>