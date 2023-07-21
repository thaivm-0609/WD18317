<?php 
    $a = $_REQUEST['a'];    //lay gia tri cua a
    $b = $_REQUEST['b'];    //lay gia tri cua b
    $c = $_REQUEST['c'];    //lay gia tri cua c

    if ((int)$a === 0) { // check dieu kien neu a=0, PT tro thanh b = c
        if ($b === $c) { // neu $b === $c => dung voi moi x
            echo 'Phuong trinh co vo so nghiem';
        } else { // $b !== $c => PT vo nghiem
            echo 'Phuong trinh vo nghiem';
        }
    } else { // neu a !== 0 thi x = (c-b)/a
        $x = ($c - $b)/$a;
        echo 'Phuong trinh co nghiem la' .$x;
    }
?>