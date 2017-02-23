<?php 
    header("Content-type:text/html;charset=utf-8");
    $arr = array(
        array('name'=>'seeker','sex'=>'man','age'=>18,'tel'=>'18516604560'),
        array('name'=>'jack','sex'=>'man','age'=>68,'tel'=>'188000000000'),
        array('name'=>'tom','sex'=>'man','age'=>8,'tel'=>'18511111111'),
        array('name'=>'roce','sex'=>'woman','age'=>18,'tel'=>'15902014762')
        );
    echo '<table border="1" align="cneter" width="800">';
    echo '<caption>用户信息表</caption>';
    echo '<tr>';
    echo '<th>name</th>';
    echo '<th>sex</th>';
    echo '<th>age</th>';
    echo '<th>tel</th>';
    echo '</tr>';
    foreach ($arr as $val) {
        echo '<tr>';
        foreach($val as $v) {
            echo '<td>'.$v.'</td>';
        }
    }