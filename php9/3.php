<?php 
    header("Content-type:text/html;charset=utf-8");

    $str = '
    <div class="clearfix goodsBox">
        <a href="goods.php?id=24"><img src="images/111.jpg" alt=""></a>
        <a href="goods.php?id=25"><img src="images/222.jpg" alt=""></a>
        <a href="goods.php?id=26"><img src="images/333.jpg" alt=""></a>
        <a href="goods.php?id=27"><img src="images/444.jpg" alt=""></a>
        <a href="goods.php?id=28"><img src="images/555.jpg" alt=""></a>
    </div>
    ';
    $regex = '/<img src="(.*?)" alt="(.*?)">/';

    preg_match_all($regex,$str,$arr);
    echo '<pre>';
        print_r($arr);
    echo '<pre/>';

    echo '<table border="1">';
    for ($i=0; $i < count($arr[1]); $i++) { 
        echo '<tr>';
            echo '<td>'.$arr[1][$i].'</td>';
            echo '<td>'.$arr[2][$i].'</td>';
        echo '</tr>';
    }
    echo '</table>';
