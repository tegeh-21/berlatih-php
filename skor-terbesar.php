<?php
function skor_terbesar($arr){
//kode di sini

    // count the data
    $count0 = 0;
    $count1 = 0;
    $count2 = 0;
    foreach($arr as $data) {
        if($data['kelas'] == "Laravel") {
            $count0 ++;
        } elseif($data['kelas'] == "React Native") {
            $count1++;
        } else {
            $count2++;
        }
    }
    
    // find the maximum value
    $max0 = 0;
    $max1 = 0;
    $max2 = 0;
    $temp0 = 0;
    $temp1 = 0;
    $temp2 = 0;
    foreach($arr as $data) {
        if($data["kelas"] == "Laravel") {
          if($temp0 < $data["nilai"]) {
            $temp0 = $data["nilai"];
          }
        }

        if($data["kelas"] == "React Native") {
          if($temp1 < $data["nilai"]) {
            $temp1 = $data["nilai"];
          }
        }

        if($data["kelas"] == "React JS") {
          if($temp2 < $data["nilai"]) {
            $temp2 = $data["nilai"];
          }
        }
    }

    // print the data that has the maximum value
    foreach($arr as $data) {
      if($data["kelas"] == "Laravel") {
        if($data["nilai"] == $temp0) {
          print_r($data);
          echo "<br>";
        }
      }

      if($data["kelas"] == "React Native") {
        if($data["nilai"] == $temp1) {
          print_r($data);
          echo "<br>";
        }
      }

      if($data["kelas"] == "React JS") {
        if($data["nilai"] == $temp2) {
          print_r($data);
          echo "<br>";
        }
      }
    }
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>