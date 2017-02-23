<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    多维数组

    */
    $arr = array(
        'tongxun'=>array(
            '电话',
            'app1'=>'微信',
            'app2'=>'手机QQ',
            'app3'=>'陌陌'
            ),
        'waimai'=>array(
            'app1'=>'饿了么',
            'app2'=>'美团',
            'app3'=>'百度'),
        'game'=>array(
            'FPS'=>array(
                'cs',
                'cf',
                'dnf'),
            'RPG'=>array(
                'MMORPG'=>'魔兽世界',
                'ARPG'=>array(
                    '暗黑破坏神3',
                    'LOL'
                    )
                )
            )
        );

    //取出饿了么
    echo $arr['waimai']['app1'];
    echo '<br/>';
    //取出cs
    echo $arr['game']['FPS'][0];
    echo '<br/>';

    //取出LOL
    echo $arr['game']['RPG']['ARPG'][1];
    //添加DOTA2到LOL的后面
    $arr['game']['RPG']['ARPG'][]='DOTA2';

    echo '<pre>';
        print_r($arr);
    echo '<pre/>';