<?php
    function cariBilanganTerbesar($bilangan1, $bilangan2){
        if($bilangan1 > $bilangan2){
            return $bilangan1;
        }
            return $bilangan2;
    }
    $bilangan1 = 100;
    $bilangan2 = 150;

    $terbesar = cariBilanganTerbesar($bilangan1, $bilangan2);
    echo "Bilangan terbesar antara $bilangan1 dengan $bilangan2 adalah :$terbesar";
?>