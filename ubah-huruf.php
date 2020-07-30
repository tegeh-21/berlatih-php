<?php
function ubah_huruf($string){
//kode di sini
    $letter = "abcdefghijklmnopqrstuvwxyz";
    $lengthString = strlen($string);
    $lengthLetter = strlen($letter);
    $temp = "";
    
    for($i=0; $i<$lengthString; $i++) {
        for($j=0; $j<$lengthLetter-1; $j++) {
            if($string[$i] !== $letter[$j]) {
                $letter[$j] = $letter[$j+1];
            } else {
                echo $letter[$j+1];
            }
        }
    }

    echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>