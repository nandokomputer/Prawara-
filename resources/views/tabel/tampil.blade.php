<!DOCTYPE html>
  <html lang="en">
  
  
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Bottom Navbar Bootstrap</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  
  <body>
      <div class="container mt-4">
          <h2 class="alert alert-info">
              Tutorial Menampilkan Data Google SpreadSheet dengan Php
          </h2>
          <div class="card">
              <div class="card-body">
                  <table class="table table-striped">
                      <tr>
                          <td>No</td>
                          <td>Nama </td>
                          <td>Bagian</td>
                          <td>Sub-Bagian</td>
                          <td>Keterangan</td>
                          <td>File</td>
                      </tr>
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
                            
                          $no = 1;
                      ?>
                      <!-- $newArray adalah variabel yang didapatkan dari data.php  -->
                      <?php foreach ($newArray as $value) { ?>
                          <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $value["Nama FIle"]; ?></td>
                              <td><?php echo $value["Bagian"]; ?></td>
                              <td><?php echo $value["Sub-Bagian"]; ?></td>
                              <td><?php echo $value["Keterangan"]; ?></td>
                              <td><?php echo $value["Upload File"]; ?></td>
                          </tr>
          
                      <?php } ?>
                  </table>
              </div>
          </div>
      </div>
  
  </body>
  
  </html>