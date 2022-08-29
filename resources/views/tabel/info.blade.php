@extends('admin.dasar')
<style>
  button#modalinfo{
    width: 40px;
    height: 40px;
  }
  td#isi{
    color: white;
  }
  p#padding{
    padding-bottom: 50px;
  }
</style>
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Informasi dan berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dash">Home</a></li>
              <li class="breadcrumb-item active">Data Informasi dan Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              @if (session('sukses'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{ session('sukses') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
                <h3 class="card-title">Data Informasi Terbaru
                <p style="padding-top: 10px;">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#infoModal" id="modalinfo">
                  <i class="bi bi-plus-circle" data-toggle="tooltip" data-placement="bottom" title="Tambah Informasi"></i>
                  </button>
                </p>
                </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
                      <tr>
                          <td>No</td>
                          <td>Nama </td>
                          <td>Bagian</td>
                          <!-- <td>Sub-Bagian</td> -->
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
                              <!-- <td></td> -->
                              <td><?php echo $value["Keterangan"]; ?></td>
                              <td style="width: 100px;" > <a href="<?php echo $value["Upload File"]; ?>" class="btn btn-success"> Download </a> </td>
                          </tr>
          
                      <?php } ?>
                  </table>
              </div>
              <div>
                  <p id="padding">
                    &nbsp;
                  </p>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>
@endsection
