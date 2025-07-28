@extends('website.app') 
@section('title','Tentang Kami - E-Learning Bahasa Arab') 
@section('content') 

<div class="untree_co-hero overlay" style="background-image: url('https://images.squarespace-cdn.com/content/v1/637d34f0f3da94257002b695/fd82a023-72c9-4ce0-a169-b698cbfd61b7/image-asset.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center text-lg-center">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">
              <span style="color: #FFD700;">عَنْ أَنْفُسِنَا</span><br>
              Tentang Kami
            </h1>
            <div class="mb-5 text-white mx-auto" data-aos="fade-up" data-aos-delay="200">
              <p class="lead">Kami adalah platform e-learning bahasa Arab yang dirancang untuk membantu siapa saja memahami dan menguasai bahasa Arab dengan mudah. 
              Dengan 7 kategori pembelajaran yang terstruktur dan interaktif, kami berkomitmen untuk menjadi mitra belajar terpercaya bagi pelajar, mahasiswa, hingga umum yang ingin memperdalam bahasa Arab.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.untree_co-hero -->
<div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5 mb-5">
        <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0" style="font-family: 'Amiri', serif;">
          <span style="color: #28a745;">مَنْ نَحْنُ</span><br>
          Tentang Kami
        </h2>
        <p data-aos="fade-up" data-aos-delay="100">
          Platform e-learning bahasa Arab yang dirancang khusus untuk pembelajaran bahasa Arab yang efektif dan menyenangkan. 
          Kami berkomitmen untuk menyediakan materi pembelajaran yang komprehensif dengan 7 kategori pembelajaran dari tingkat pemula hingga lanjutan.
        </p>
        <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
          <li><i class="fas fa-check-circle text-success mr-2"></i>7 Kategori Pembelajaran Lengkap</li>
          <li><i class="fas fa-check-circle text-success mr-2"></i>Materi dari Pemula hingga Lanjutan</li>
          <li><i class="fas fa-check-circle text-success mr-2"></i>Metode Pembelajaran Interaktif</li>
          <li><i class="fas fa-check-circle text-success mr-2"></i>Durasi Pembelajaran yang Realistis</li>
          <li><i class="fas fa-check-circle text-success mr-2"></i>Konten yang Kaya dan Menarik</li>
        </ul>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-1"></div>
        <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
          <span class="play-wrap">
            <span class="icon-play"></span>
          </span>
          <img src="{{ asset('website/images/logo.png') }}" alt="Image" class="img-fluid rounded" onerror="this.onerror=null; this.src='https://www.safetysign.co.id/image-upload/news-jasa-pembuatan-e-learning-457.jpg'; this.className='img-fluid rounded';">
        </a>
      </div>
    </div>
  </div>
</div>
<!-- /.untree_co-section -->
</div>
@endsection