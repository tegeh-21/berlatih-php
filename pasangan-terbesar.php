<?php
function pasangan_terbesar($angka){
// kode di sini
    $length = strlen($angka);
    $max = '';
    $numStr = (string)$angka;

    for($i=0; $i<$length-1; $i++) {
        $numMax = substr($numStr, $i, 2);
        $now[$i] = $numMax;
    }

    $temp = $now[0];
    for($j=0; $j<$length-1; $j++) {
        if($temp < $now[$j]) {
            $temp = $now[$j];
        }
    }

    echo $temp."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>