<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  if(strlen($angka) <= 1) {
      echo $angka+1;
      echo "<br>";
  } else {
      $angkaStr = (string)$angka;
      $revNum = '';
      $strLen = strlen($angka) - 1;

      for($i=$strLen; $i>=0; $i--) {
          $revNum .= $angkaStr[$i];
      }

      if($angkaStr == $revNum) {
          echo $angka;
          echo "<br>";
      } else {
          $angka += 1;
          palindrome_angka($angka);
      }
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>