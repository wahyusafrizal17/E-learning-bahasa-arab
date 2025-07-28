@extends('website.app')
@section('title','E-Learning Bahasa Arab - Platform Pembelajaran Interaktif')
@section('content')

    <div class="untree_co-hero overlay" style="background-image: url('{{ asset('website/images/login.jpg') }}');">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12">
            <div class="row justify-content-left">
              <div class="col-lg-6 text-center align-self-center order-lg-2">
                {{-- <a href="https://vimeo.com/342333493" data-fancybox class="video-play-btn" data-aos="fade-up" data-aos-delay="400">
                  <span class="fa fa-user"></span>
                </a> --}}
              </div>
              <div class="col-lg-6 text-center text-lg-left">
                <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif; font-size: 3.5rem;">
                  <span style="color: #FFD700;">اَللُّغَةُ الْعَرَبِيَّةُ</span><br>
                  E-Learning Bahasa Arab
                </h1>
                <div class="mb-5 text-white desc mx-" data-aos="fade-up" data-aos-delay="200">
                  <p class="lead">Platform e-learning interaktif untuk mempelajari bahasa Arab dari dasar hingga mahir. 
                  Pelajari huruf hijaiyah, tajwid, nahwu, shorof, muhadatsah, qiroah, dan kitabah dengan metode yang menyenangkan dan efektif.</p>
                </div>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="300">
                  <a href="{{ route('elearning.materi') }}" class="btn btn-warning btn-lg">
                    <i class="fas fa-graduation-cap"></i> Mulai Belajar Sekarang
                  </a>
                </p>
                {{-- <p class="mb-0" data-aos="fade-up" data-aos-delay="300">
                  <a href="#" class="btn btn-primary">Mulai Belajar</a>
                </p> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-hero -->
    <div class="untree_co-section py-0">
      <div class="container">
        <div class="row">
          <!-- Huruf Hijaiyah -->
          <div class="col-md-6 col-lg-4">
            <div class="block-v1 color-1" data-aos="fade-up" data-aos-delay="0">
              <span class="flaticon-open-book"><i class="fas fa-font fa-2x"></i></span>
              <h3>Huruf Hijaiyah</h3>
              <p>Pelajari 28 huruf hijaiyah dengan cara membaca dan menulis yang benar. Dasar penting untuk membaca Al-Quran.</p>
            </div>
          </div>
          <!-- Tajwid -->
          <div class="col-md-6 col-lg-4">
            <div class="block-v1 color-2" data-aos="fade-up" data-aos-delay="100">
              <span class="flaticon-quiz"><i class="fas fa-mosque fa-2x"></i></span>
              <h3>Tajwid</h3>
              <p>Pelajari hukum bacaan Al-Quran seperti nun mati, mim mati, idzhar, idgham, iqlab, dan ikhfa.</p>
            </div>
          </div>
          <!-- Nahwu & Shorof -->
          <div class="col-md-6 col-lg-4">
            <div class="block-v1 color-3" data-aos="fade-up" data-aos-delay="200">
              <span class="flaticon-idea"><i class="fas fa-language fa-2x"></i></span>
              <h3>Nahwu & Shorof</h3>
              <p>Pelajari tata bahasa Arab (nahwu) dan perubahan bentuk kata (shorof) untuk pemahaman yang mendalam.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->
    <div class="untree_co-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom text-center mb-4" style="font-family: 'Amiri', serif;">
              <span style="color: #28a745;">مَا نُقَدِّمُهُ</span><br>
              Program Pembelajaran Lengkap
            </h2>
            <p class="lead">Platform e-learning bahasa Arab dengan 7 kategori pembelajaran yang komprehensif, dari tingkat pemula hingga lanjutan.</p>
          </div>
        </div>
        <div class="row">
          <!-- Muhadatsah -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature">
              <span class=""><i class="fas fa-comments fa-2x"></i></span>
              <h3>Muhadatsah</h3>
              <p>Pelajari percakapan sehari-hari dalam bahasa Arab. Latih kemampuan berbicara dan komunikasi praktis.</p>
            </div>
          </div>
          <!-- Qiroah -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature">
              <span class=""><i class="fas fa-book-open fa-2x"></i></span>
              <h3>Qiroah</h3>
              <p>Latih kemampuan membaca teks bahasa Arab dengan pemahaman yang baik dan kosakata yang kaya.</p>
            </div>
          </div>
          <!-- Kitabah -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature">
              <span class=""><i class="fas fa-pen-fancy fa-2x"></i></span>
              <h3>Kitabah</h3>
              <p>Pelajari menulis karangan dalam bahasa Arab dengan struktur yang benar dan gaya yang baik.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->
    <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('https://img.freepik.com/premium-photo/koran-holy-book-muslims-public-item-all-muslims-table_44074-490.jpg?semt=ais_hybrid&w=740');">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-7">
            <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0" style="font-family: 'Amiri', serif;">
              <span style="color: #FFD700;">تَعْلِيمُ اللُّغَةِ الْعَرَبِيَّةِ</span><br>
              E-Learning Bahasa Arab
            </h2>
            <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Mulai perjalananmu mempelajari bahasa Arab dengan metode interaktif dan materi lengkap dari dasar hingga mahir. 
            Platform e-learning yang dirancang khusus untuk pembelajaran bahasa Arab yang efektif dan menyenangkan.</p>
            <p>
              <a href="{{ route('elearning.materi') }}" class="btn btn-warning btn-lg" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-graduation-cap"></i> Mulai Belajar Sekarang
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- /.untree_co-section -->
    
    @endsection