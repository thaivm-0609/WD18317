<?php 
    $a = $_REQUEST['a'];    //lay gia tri cua a
    $b = $_REQUEST['b'];    //lay gia tri cua b
    $c = $_REQUEST['c'];    //lay gia tri cua c

    //ax^2 + bx + c = 0

    $delta = $b^2 - 4*$a*$c;

    if ((int)$a !== 0) {
        if ($delta < 0) {
            echo 'Phuong trinh vo nghiem thuc';
        } else if ($delta == 0) {
            $x = -$b/(2*$a);
            echo 'Phuong trinh co nghiem kep x1 = x2 =' .$x;
        } else {
            $x1 = (-$b - sqrt($delta))/(2*$a);
            $x2 = (-$b + sqrt($delta))/(2*$a);
        }
    } else {
        echo 'Vui long nhap a khac 0';
    }
?>

