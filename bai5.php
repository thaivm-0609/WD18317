<?php

    function tinhHieu($soBe, ...$params) {
        print_r($params);
    }
    // tinhHieu(10, 11, 15);
    // tinhHieu(22,5);

    function say($name) {
        echo "Hello $name";
    }

    say('thaivm2'); //cach goi ham

    //ham an danh (khong co ten ham)
    $a = function($name) 
    {
        echo "Hello $name";
    };

    $a('thaivm2'); // cach goi ham an danh

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
    
    //goi ham su dung tham so bat dinh ...$params, 10 se dc gan cho $soBe
    //cac phan tu con lai se duoc gan cho $params duoi dang array(mang)
    tinhTong(10, 11,12,13,14,15); 

    $message = 'Hello';
    //closure (muon su dung bien o ngoai ham can phai co tu khoa use() )
    $say = function($name) use ($message)
    {
        return $message . $name;
    };

    //array function (ham mui ten)
    $say = fn($name) => $message . $name; 
    // echo $say('thaivm2');

    //VD ve closure tinh tong 3 so (gom 2 bien $a,$b khai bao truoc va $c la tham so truyen vao)
    $a = 1;
    $b = 2;
    $tong = function($c) use ($a, $b) {
        return $a + $b + $c;
    };

    $tong = fn($c) => $c + $a + $b; //viet duoi dang arrow function 
    echo $tong(8);
?>