<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $length = count($arr);
    $hop = $arr[1] - $arr[0];
    $temp1 = "";

    for($i=0; $i<$length-1; $i++) {
        if($arr[$i+1]-$arr[$i] !== $hop) {
            $temp1[$i] = "false";
        } else {
            $temp1[$i] = "true";
        }
    }

    echo $temp1;
    echo "<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>