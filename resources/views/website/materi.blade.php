@extends('website.app') 
@section('title','Materi Pembelajaran - E-Learning Bahasa Arab') 
@section('content') 

<div class="untree_co-hero overlay" style="background-image: url('https://images.squarespace-cdn.com/content/v1/637d34f0f3da94257002b695/fd82a023-72c9-4ce0-a169-b698cbfd61b7/image-asset.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center text-lg-center">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">
              <span style="color: #FFD700;">الْمَوَادُ الدِّرَاسِيَّةُ</span><br>
              Materi Pembelajaran
            </h1>
            <div class="mb-5 text-white mx-auto" data-aos="fade-up" data-aos-delay="200">
              <p class="lead">Selamat datang di platform e-learning bahasa Arab. Di sini, Anda dapat mempelajari 7 kategori pembelajaran dari dasar hingga tingkat lanjutan secara interaktif dan menyenangkan. 
              Tingkatkan kemampuan membaca, menulis, berbicara, dan memahami bahasa Arab bersama kami.</p>
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
    <div class="row align-items-stretch">
      @foreach($materi as $row)
      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="media-h d-flex h-100">
          <figure>
            @include('website.partials.image-fallback', [
                'src' => asset('banner/'.$row->banner),
                'alt' => $row->nama_materi,
                'style' => 'object-fit: cover; height: 100%;'
            ])
          </figure>
          <div class="media-h-body">
            <div class="mb-2">
              <span class="badge badge-primary mr-2">{{ $row->kategori }}</span>
              <span class="badge badge-info mr-2">{{ $row->tingkat_kesulitan }}</span>
            </div>
            <h2 class="mb-3">
              <a href="{{ route('elearning.detail', $row->id) }}" style="color: #28a745; text-decoration: none;">
                <i class="fas fa-book-open mr-2"></i>{{ $row->nama_materi }}
              </a>
            </h2>
            <div class="meta mb-3">
              <span class="fa fa-calendar mr-2"></span>
              <span>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y') }}</span>
              @if($row->kelas)
                <span class="ml-3">
                  <i class="fas fa-users mr-1"></i>
                  <span>{{ $row->kelas->nama_kelas }}</span>
                </span>
              @endif
            </div>
            <p class="text-muted">{{ $row->deskripsi ?? \Illuminate\Support\Str::limit(strip_tags($row->materi), 150) }}</p>
            <a href="{{ route('elearning.detail', $row->id) }}" class="btn btn-outline-primary btn-sm">
              <i class="fas fa-eye mr-1"></i> Lihat Materi
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
    <div class="col-12 text-center">
      <ul class="list-unstyled custom-pagination">
        @for ($i = 1; $i <= $materi->lastPage(); $i++)
          <li class="{{ $materi->currentPage() == $i ? 'active' : '' }}">
            <a href="{{ $materi->url($i) }}">{{ $i }}</a>
          </li>
        @endfor
      </ul>
    </div>
  </div>
  </div>
</div>
@endsection