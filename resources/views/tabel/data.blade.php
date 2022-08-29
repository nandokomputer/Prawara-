
  <?php

//sesuaikan dengan link spreadsheet yang didapatkan sebelumnya
$feed = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vSW_D3CbL_p5NVDTvueS65pkeBHqPE_31aKNgQHCxtl-h7Vv8Hpf41k5M8tx8ksRf4j4Kw-iLrKlll9/pub?output=csv';
 
// variabel ini akan digunakan untuk melooping data
$keys = array();
$newArray = array();
 
//fungsi untuk mengkonversi csv ke array asosiatif
function csvToArray($file, $delimiter) { 
  if (($handle = fopen($file, 'r')) !== FALSE) { 
    $i = 0; 
    while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) { 
      for ($j = 0; $j < count($lineArray); $j++) { 
        $arr[$i][$j] = $lineArray[$j]; 
      } 
      $i++; 
    } 
    fclose($handle); 
  } 
  return $arr; 
} 
 
// menjalankan fungsi dan memasukan data ke variabel $data 
$data = csvToArray($feed, ',');
 
$count = count($data) - 1;
 
//row pertama digunakan untuk nama/header
$labels = array_shift($data);  

//membuat nama-nama key dari header
foreach ($labels as $label) {
  $keys[] = $label;
}

//menggabungkan key dan value
for ($j = 0; $j < $count; $j++) {
  $d = array_combine($keys, $data[$j]);
  $newArray[$j] = $d;
}
 
?>