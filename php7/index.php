<?php 
    header("Content-type:text/html;charset=utf-8");
    $arr = array(
        'groupA'=>array(
            array('name'=>'AAAA','sex'=>'man','age'=>18,'tel'=>'15002104762'),
            array('name'=>'AAAA','sex'=>'man','age'=>28,'tel'=>'15003104762'),
            array('name'=>'AAAA','sex'=>'man','age'=>38,'tel'=>'15004104762'),
            array('name'=>'AAAA','sex'=>'woman','age'=>48,'tel'=>'15005104762')
            ),
        'groupB'=>array(
            array('name'=>'BBBB','sex'=>'man','age'=>18,'tel'=>'15002104762'),
            array('name'=>'BBBB','sex'=>'man','age'=>28,'tel'=>'15003104762'),
            array('name'=>'BBBB','sex'=>'man','age'=>38,'tel'=>'15004104762'),
            array('name'=>'BBBB','sex'=>'woman','age'=>48,'tel'=>'15005104762')
            ),
        'groupC'=>array(
            array('name'=>'CCCC','sex'=>'man','age'=>18,'tel'=>'15002104762'),
            array('name'=>'CCCC','sex'=>'man','age'=>28,'tel'=>'15003104762'),
            array('name'=>'CCCC','sex'=>'man','age'=>38,'tel'=>'15004104762'),
            array('name'=>'CCCC','sex'=>'woman','age'=>48,'tel'=>'15005104762')
            ),
        );

    foreach ($arr as $value) {
        echo '<table border="1" align="center" width="800">';
        echo '<tr>';
        echo '<th>name</th>';
        echo '<th>sex</th>';
        echo '<th>age</th>';
        echo '<th>tel</th>';
        echo '</tr>';
        foreach($value as $val){
            echo '<tr>';
            foreach($val as $v){
                echo '<td>'.$v.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
