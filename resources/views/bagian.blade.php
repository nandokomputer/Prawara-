@extends('temp.dasar')

<style>
a#bagian{  
 background-color: blue; 
 color: white;
 font-weight: 600; 
 border-radius: 25px;
}
a#bagian:hover{
    background-color: greenyellow;
    color: black;
    box-shadow: 10px 10px 5px lightblue;
}
</style>

<!-- hero -->
<section id="hero">
<div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Bagian Kedinasan <span>PRAWARA</span></h1>
            <h2>Silahkan pilih bagian pada Dinas Ketenagakerjaan Kabupaten Malang..</h2>
            <div class="text-center text-lg-start">
              <!-- <a href="/bagian" class="btn-get-started scrollto">Lanjutkan..</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/logo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section><!-- End Hero -->
<!-- end hero -->

@section('content')

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="padding-bottom: 10px;">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Bagian Kedinasan</h2>
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Bagian Kedinasan</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

<!-- bagian -->
<section class="inner-page" style="padding-top: 10px;">
<div class="container-fluid">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">PRAWARA</h6>
                <h1>Bagian Kedinasan</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4"><a href="/sub">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2" style="padding-bottom: 20px;">SEKRETARIAT</h5>
                        <!-- <p class="m-0" >
                            <p><a href="/sub" class="btn" id="bagian" >Sekretaris</a> </p>
                            <p><a href="/sub" class="btn" id="bagian">Ka Subbag Umum dan Kepegawaian</a> </p>
                            <p><a href="/sub" class="btn" id="bagian">Ka Subbag Keuangan dan Aset</a> </p>
                            <p><a href="/sub" class="btn" id="bagian">Ka Subbag Perencanaan, Evaluasi dan Pelaporan</a> </p>
                        </p> -->
                        </a> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4"><a href="/sub">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2" style="padding-bottom: 20px;">BIDANG PENEMPATAN TENAGA KERJA</h5>
                            <!-- <p><a href="" class="btn" id="bagian" >Kepala Seksi Penempatan Tenaga Kerja</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Informasi Pasar Kerja</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Perluasan Kesempatan Kerja</a> </p> -->
                            </a> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4"><a href="/sub">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2" style="padding-bottom: 20px;">BIDANG PELATIHAN DAN PRODUKTIVITAS TENAGA KERJA</h5>
                            <!-- <p><a href="" class="btn" id="bagian" >Kepala Seksi Pelatihan dan Produktivitas Tenaga Kerja</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Kelembagaan Pelatihan</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Sertifikasi Kompetensi dan Pemagangan</a> </p> -->
                            </a> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4"><a href="/sub">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2" style="padding-bottom: 20px;">BIDANG HUBUNGAN INDUSTRIAL </h5>
                            <!-- <p><a href="" class="btn" id="bagian" >Kepala Seksi Penyelesaian Perselisihan Hubungan Industrial</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Kelembagaan Hubungan Industrial dan Jamsostek</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Perbaikan Syarat - syarat Kerja dan Upah</a> </p> -->
                            </a> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4"><a href="/sub">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2" style="padding-bottom: 20px;">BIDANG TRANSMIGRASI</h5>
                            <!-- <p><a href="" class="btn" id="bagian" >Kepala Seksi Bimbingan Transmigrasi</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Pemindahan dan Pengerahan</a> </p>
                            <p><a href="" class="btn" id="bagian">Kepala Seksi Penyiapan</a></p>                             -->
                            </a> s
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/data/lib/easing/easing.min.js"></script>
    <script src="/data/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/data/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/data/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/data/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/data/js/main.js"></script>

@endsection