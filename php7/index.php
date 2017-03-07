<?php 
    header("Content-type:text/html;charset=utf-8");
    //先搞到最后，再一个一个往前挪
    $array = array(1,2,3);
    $value = end($array);
    echo $value;
    while($value) {
        echo "$value<br/>";
        $value = prev($array);
    }
     
 ?>