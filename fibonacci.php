<?php 

    function fibonacci($number) 
    {
        $current = 1; //khoi tao gia tri hien tai
        $previous = 0; //khoi tao gia tri lien truoc do

        for ($i=0; $i<$number; $i++) {
            $temp = $previous + $current; //gia tri tiep theo se bang tong cua gia tri hien tai + gia tri lien truoc

            yield $temp; //yield de tra ve gia tri tiep theo va tiep tuc vong lap
            $previous = $current; //khi $i++ thi gan lai gia tri cho $previous bang gia tri current truoc do
            $current = $temp; //khi $i++ thi gan lai gia tri cho $current bang voi $temp (gia tri moi)
        }
    }

    //su dung vong lap foreach de hien thi ra day so Fibonacci
    foreach(fibonacci(2) as $value){
        echo $value. ' ';
    }
?>