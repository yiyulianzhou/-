<?php 
    header("Content-type:text/html;charset=utf-8");
    /*$a = array('a'=>1,'b'=>2,'c'=>3);
    $aa = array('d'=>3,'e'=>4,'f'=>5);
    $b = array_values($a);
    echo '<pre>';
        print_r($b);
    echo '<pre/>';
    $c = array_keys($a);
    echo '<pre>';
        print_r($c);
    echo '<pre/>';
    $d = array_flip($a);
    echo '<pre>';
        print_r($d);
    echo '<pre/>';
    $e = array_count_values($a);
    echo '<pre>';
        print_r($e);
    echo '<pre/>';
    $x = array_combine($a,$aa);
    echo '<pre>';
        print_r($x);
    echo '<pre/>';
    array_shift($a);
    var_dump($a);*/
    echo '<hr/>';
    $a = array('a'=>1,'b'=>2,'c'=>3);

    function my_print(&$value,$key,$prefix){
        $value = $value+$prefix;
    }
    array_walk($a,'my_print',3);
    var_dump($a);
 ?>