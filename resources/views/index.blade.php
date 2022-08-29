@extends('temp.dasar')
<section id="hero">
<div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Selamat Datang di Aplikasi <span>PRAWARA</span></h1>
            <h2>Aplikasi penyedia data rapat dan sistem informasi antar bagian di Dinas Ketenagakerjaan Kabupaten Malang. </h2>
            <div class="text-center text-lg-start">
              <a href="/bagian" class="btn-get-started scrollto">Lanjutkan..</a>
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
@section('content')

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          <img src="assets/img/logo2.png" class="img-fluid" alt="" style="height: 580px; width: 500px; padding-top: 150px;">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Fitur-fitur PRAWARA</h3>
            <p>PRAWARA yang dalam bahasa San Sekerta yang memiliki arti berita/ warta/ kabar yang sesuai dengan tujuan PRAWARA itu dibuat yaitu sebagai tempat warta dan kabar yang juga bisa disebut sebagai laporan dari bagian-bagian yang ada di Dinas Ketenagakerjaan Kabupaten Malang. </p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Pegangan Data Rapat</a></h4>
              <p class="description">Fitur " Pegangan Data Rapat " berisi laporan data pada setiap bagian yang ada pada Dinas Ketenagakerjaan Kabupaten Malang. Dapat membantu efisiensi waktu pada saat rapat internal yang di selenggarakan. </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Informasi dan Berita</a></h4>
              <p class="description">Fitur " Informasi dan Berita " berisi tentang informasi terbaru yang ada pada Dinas Ketenagakerjaan Kabupaten Malang seperti informasi dari pemerintah ataupun informasi internal dan kegiatan kedinasan, dan juga informasi pembaruan data pada fitur Pegangan Data Rapats. </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Saran & Kritik</a></h4>
              <p class="description">Karena aplikasi PRAWARA ini tergolong website baru maka masih perlu banyak pengembangan fitur-fitur dan kelancaran dari UI/UX nya maka terdapat fitur " Saran & Kritik " agar aplikkasi ini dapat terus Berkembang</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Pegangan Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>PRAWARA</h2>
          <p>Pegangan Data Rapat</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Hubungan Industrial</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Sekertariat</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Pelatihan dan Produktivitas Tenaga Kerja</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Penempatan Tenaga Kerja</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Transmigrasi</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pegangan Section -->

    
    <!-- ======= informasi Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

      <div class="section-title" data-aos="fade-up">
          <h2>PRAWARA</h2>
          <p style="color: white;">Informasi dan Berita</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/info1.jpg" class="testimonial-img" alt="" style=" width: 500px; height: 300px; border-radius: 8px; margin: 0 auto; border: 6px solid rgba(255, 255, 255, 0.15);">
                <h3>Disnaker Harap PPTKIS Perhatikan PMI</h3>
                <h4>14 Juli 2022</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Melindungi Pekerja Migran Indonesia (PMI), Dinas Tenaga Kerja (Disnaker) Kabupaten Malang menggelar Focus Group Discussion (FGD) bertajuk ‘Perlindungan Pekerja Migran Indonesia melalui BPJS Ketenagakerjaan’, di ruang rapat Anusopati, Pemkab Malang Jl Merdeka Timur Kota Malang, Rabu (13/7/2022).
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End informasi item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/info2.jpg" class="testimonial-img" alt="" style=" width: 500px; height: 300px; border-radius: 8px; margin: 0 auto; border: 6px solid rgba(255, 255, 255, 0.15);">
                <h3>Disnaker Ajak Pengusaha Support Atlet Kabupaten Malang</h3>
                <h4>12 Juli 2022</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saat berlangsungnya Pekan Olah Raga Provinsi (Porprov) Jawa Timur VII, setiap Organisasi Perangkat Daerah (OPD) di Kabupaten Malang diharapkan memberi motivasi pada setiap Cabang Olahraga (Cabor). Seperti dilakukan oleh Dinas Tenaga Kerja (Disnaker) Kabupaten Malang pada Cabor Karate yang bertanding di Kabupaten Bondowoso.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End informasi item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/info3.jpg" class="testimonial-img" alt="" style=" width: 500px; height: 300px; border-radius: 8px; margin: 0 auto; border: 6px solid rgba(255, 255, 255, 0.15);">
                <h3>16 Nakes RSUD Lawang Diberhentikan Sepihak, Ini Kata Disnaker Kabupaten Malang
                Peristiwa</h3>
                <h4>30 Juni 2022</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Dinas Tenaga Kerja (Disnaker) Kabupaten Malang menilai bahwa pihak Rumah Sakit Umum Daerah (RSUD) Lawang adalah pihak yang paling bertanggung jawab atas polemik diberhentikannya 16 tenaga kesehatan (nakes) yang diduga dilakukan secara sepihak. Apalagi keenam belas nakes yang diberhentikan atau diputus kontraknya juga telah melakukan assestment sebanyak 4 kali. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End informasi item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/info4.jpg" class="testimonial-img" alt="" style=" width: 500px; height: 300px; border-radius: 8px; margin: 0 auto; border: 6px solid rgba(255, 255, 255, 0.15);">
                <h3>Job Fair Disnakertrans Tulungagung Dibuka, Ada 50 Perusahan yang Ikut dan Serap Ribuan Tenaga Kerja </h3>
                <h4>12 Juli 2022</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pemerintah Kabupaten (Pemkab) Tulungagung melalui Dinas Tenaga Kerja dan Transmigrasi (Disnakertrans) membuka job fair atau bursa kerja bagi seluruh masyarakat. Bursa kerja yang berlangsung selama 3 hari ini, secara resmi dibuka oleh Bupati Tulungagung Maryoto Birowo di halaman kantor dinas setempat, Selasa (12/7/2022).
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End informasi item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/info5.jpg" class="testimonial-img" alt="" style=" width: 500px; height: 300px; border-radius: 8px; margin: 0 auto; border: 6px solid rgba(255, 255, 255, 0.15);">
                <h3>Soal Pemecatan Nakes, DPRD Bakal Panggil Dirut RSUD Lawang</h3>
                <h4>1 Juli 2022</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pemecatan secara sepihak terhadap 10 perawat dan 6 bidan sebagai tenaga kesehatan (Nakes) RSUD Lawang terus bergulir. Berdasarkan penilaian Dinas Tenaga Kerja (Disnaker) Kabupaten Malang persoalan ini kurang tepat dan terkesan menyalahi prosedur. Pasalnya, mereka telah menjalani empat kali assesmen namun hasilnya tidak pernah diberikan pada yang bersangkutan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End informasi item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End informasi Section -->


    <!-- ======= Dokumentasi Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>PRAWARA</h2>
          <p>Dokumentasi</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/dokumentasi1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/dokumentasi2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/dokumentasi3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/dokumentasi4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/dokumentasi5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/dokumentasi6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/dokumentasi7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/dokumentasi8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/dokumentasi8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>PRAWARA</h2>
          <p>Kepemimpinan Dinas Ketenagakerjaan Kabupaten Malang</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kepala Dinas</h4>
                <span>Kepala Dinas</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sekretaris</h4>
                <span>Sekretaris</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kepala Bidang Penempatan Tenaga Kerja</h4>
                <span>Kepala Bidang Penempatan Tenaga Kerja</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kepala Bidang Hubungan Industrial</h4>
                <span>Kepala Bidang Hubungan Industrial</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>PRAWARA</h2>
          <p>Kontak Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Trunojoyo No.Kav. 3, Ngadiluwih, Kedungpedaringan, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>disnakerkabupatenmalang@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Seluler:</h4>
                <p>(0341) 393933</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection