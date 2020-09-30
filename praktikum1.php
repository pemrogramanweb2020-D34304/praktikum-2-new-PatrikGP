<?php

    echo "<center>";
    $jumlah = 5;
    for ($i=1; $i <= $jumlah ; $i++) { 
        for ($a=1; $a <= $i ; $a++) { 
            echo "  &nbsp";
        }
        for ($b = $jumlah; $b >= $i; $b-=1) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    $jumlah2 = 10;
    while ($jumlah2> 1) {
        $b = $jumlah2;
        while ($b >= 1) {
            echo "*";
            $b = $b - 1;
        }
    echo "<br>";
    $jumlah2 = $jumlah2 - 2;
    }
    echo "<br>";

    for($p = 5; $p >= 1; $p--){
        for($q = 1; $q <= 1  - $p; $q++){
            echo " ";
        }
        for($r = 1; $r < $p;$r++){
            echo "$r";
        }
        for($l = $p; $l >=1; $l--){
            echo "$l";
        }
         echo "<br>";
    }

    echo "<center>";
?>