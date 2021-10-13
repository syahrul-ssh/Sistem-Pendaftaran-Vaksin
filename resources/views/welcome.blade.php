<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Vaksin Yuk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="#">Vaksin Yuk!</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="#">Home</a></li>
                    <li><a class="nav-link" href="{{ route('cari') }}">Cek Pendaftaran</a></li>
                    <li><a class="nav-link" href="{{ route('cari.kartu') }}">Cetak Kartu Vaksin</a></li>
                    <li><a class="getstarted" href="{{ route('daftar.create') }}">Daftar Vaksin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Ayo lindungi dirimu sekarang</h1>
                    <h2>Dengan berpartisipasi dalam program Vaksinasi COVID-19, yang sekarang diselenggarakan di
                        Desa Cilampeni</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('daftar.create') }}" class="btn-get-started scrollto">Daftar Vaksin
                            Sekarang!</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('landing/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tentang Vaksinasi COVID-19</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-12 text-center">
                        <p>
                            Vaksin COVID-19 telah tersedia di Indonesia. Program vaksinasi pun mulai dijalankan oleh
                            pemerintah sebagai salah upaya untuk memutus rantai penyebaran infeksi virus Corona dan
                            menekan angka kasus COVID-19 yang masih terus meningkat.
                        </p>
                        <p>
                            Pemerataan vaksinasi hingga saat ini dilanjutkan untuk masyarakat umum dan terus berjalan
                            hingga berhasil menjangkau seluruh warga negara Indonesia dan warga negara asing yang
                            bertempat tinggal di Indonesia.
                            Harapannya dengan upaya pemerataan vaksinasi ini, Indonesia dapat segera bangkit dan
                            terbebas dari penyebaran virus Covid-19.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Ayo buruan tunggu apa lagi segera lakukan vaksinasi agar tubuh kita terjaga dari gangguan
                            virus</h3>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle text-small" href="{{ route('daftar.create') }}">Daftar Vaksin
                            Sekarang!</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright text-center">
                &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landing/js/main.js') }}"></script>

</body>

</html>
