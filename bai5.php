<?php

    function tinhHieu($soBe, ...$params) {
        print_r($params);
    }
    // tinhHieu(10, 11, 15);
    // tinhHieu(22,5);

    // echo str_repeat('abc', 10);
    // echo strtoupper('string viet thuong');

    function say($name) {
        echo "Hello $name";
    }

    // say('thaivm2');

    //ham an danh
    $a = function($name) 
    {
        echo "Hello $name";
    };

    // $a('thaivm2');

    //tham so bat dinh
    function tinhTong($soBe, ...$params) {
        $soParam = func_num_args();
        $args = func_get_args();

        $tong = 0;
        foreach ($params as $number) {
            $tong += $number;
        }

        echo $tong;
    };

    tinhTong(10, 11,12,13,14,15);
?>