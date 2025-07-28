<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO metadata khusus website pembelajaran bahasa Arab -->
    <meta name="description" content="Platform e-learning bahasa Arab interaktif untuk semua usia. Belajar huruf hijaiyah, tajwid, nahwu, shorof, muhadatsah, qiroah, dan kitabah dengan metode yang menyenangkan dan efektif." />
    <meta name="keywords" content="e-learning bahasa Arab, pembelajaran Arab online, huruf hijaiyah, tajwid, nahwu, shorof, muhadatsah, qiroah, kitabah, kursus bahasa Arab, pendidikan Arab interaktif" />
    <!-- Font yang cocok untuk konten edukatif Arab -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Scheherazade+New:wght@400;700&family=Muli:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/new-style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/custom-elearning.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title', 'E-Learning Bahasa Arab - Platform Pembelajaran Interaktif')</title>
  </head>
  <body>
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav mb-5">
      <div class="sticky-nav js-sticky-header">
        <div class="container position-relative">
          <div class="site-navigation text-center">
            <a href="/" class="logo menu-absolute m-0" style="margin-left: -155px !important;margin-top: -6px !important;">
                <img src="{{ asset('website/images/logo.png') }}" alt="" width="8%" onerror="this.onerror=null; this.src='https://www.safetysign.co.id/image-upload/news-jasa-pembuatan-e-learning-457.jpg'; this.style.width='8%'; this.style.height='auto';">
                <span style="font-family: 'Amiri', serif;font-weight: 700;font-size: 17px;">e-Learning Bahasa Arab</span>
            </a>
            <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
              <li class="active">
                <a href="/"><i class="fas fa-home"></i> Beranda</a>
              </li>
              <li>
                <a href="{{ route('elearning.materi') }}"><i class="fas fa-book-open"></i> Materi Pembelajaran</a>
              </li>
              <li>
                <a href="{{ route('elearning.about') }}"><i class="fas fa-info-circle"></i> Tentang Kami</a>
              </li>
            </ul>
            <a href="{{ route('elearning.materi') }}" class="btn-book btn btn-primary btn-sm menu-absolute">
               <i class="fas fa-graduation-cap"></i> Mulai Belajar </a>
            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    @yield('content')

    <div class="site-footer" style="padding: 10px 0px 0px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> Copyright ©{{date('Y')}} By E-Learning
            </p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <script src="{{ asset('website/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/aos.js') }}"></script>
    <script src="{{ asset('website/js/custom.js') }}"></script>
    <script src="{{ asset('website/js/image-fallback.js') }}"></script>
  </body>
</html>