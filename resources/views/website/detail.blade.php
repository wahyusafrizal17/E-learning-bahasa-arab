@extends('website.app') 
@section('title', $materi->nama_materi . ' - E-Learning Bahasa Arab') 
@section('content') 

<div class="untree_co-hero overlay" style="background-image: url('https://images.squarespace-cdn.com/content/v1/637d34f0f3da94257002b695/fd82a023-72c9-4ce0-a169-b698cbfd61b7/image-asset.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center text-lg-center">
      
            
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif; font-size: 3rem;">
              {{ $materi->nama_materi }}
            </h1>
            
            <div class="mb-4" data-aos="fade-up" data-aos-delay="150">
              <span class="badge badge-primary mr-2" style="font-size: 14px; padding: 8px 15px;">
                <i class="fas fa-tag mr-1"></i>{{ $materi->kategori }}
              </span>
              <span class="badge badge-info mr-2" style="font-size: 14px; padding: 8px 15px;">
                <i class="fas fa-level-up-alt mr-1"></i>{{ $materi->tingkat_kesulitan }}
              </span>
              @if($materi->status == 'Aktif')
                <span class="badge badge-success" style="font-size: 14px; padding: 8px 15px;">
                  <i class="fas fa-check-circle mr-1"></i>{{ $materi->status }}
                </span>
              @else
                <span class="badge badge-warning" style="font-size: 14px; padding: 8px 15px;">
                  <i class="fas fa-clock mr-1"></i>{{ $materi->status }}
                </span>
              @endif
            </div>
            
            @if($materi->deskripsi)
              <div class="alert alert-light" data-aos="fade-up" data-aos-delay="200" style="background: rgba(255,255,255,0.9); border: none; border-radius: 15px;">
                <p class="mb-0 text-dark">
                  <i class="fas fa-info-circle mr-2 text-primary"></i>
                  {{ $materi->deskripsi }}
                </p>
              </div>
            @endif
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
    <div class="row">
      <div class="col-lg-12">
        <!-- Material Banner -->
        @if($materi->banner)
        <div class="card shadow-sm mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card-body p-0" style="padding: 0;">
            <div class="material-banner-container">
              @include('website.partials.image-fallback', [
                  'src' => asset('banner/'.$materi->banner),
                  'alt' => $materi->nama_materi,
                  'class' => 'material-banner-image',
                  'style' => 'width: 100%; height: 300px; object-fit: cover; border-radius: 15px;'
              ])
            </div>
          </div>
        </div>
        @endif

        <!-- Main Content Card -->
        <div class="card shadow-sm" data-aos="fade-up" data-aos-delay="150">
          <div class="card-header bg-gradient-primary text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px 15px 0 0;">
            <h5 class="mb-0">
              <i class="fas fa-book-open mr-2"></i>Konten Materi
            </h5>
          </div>
          <div class="card-body p-4">
            <div class="materi-content" style="font-family: 'Scheherazade New', serif; line-height: 1.8; font-size: 16px;">
              {!! $materi->materi !!}
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- /.untree_co-section -->
</div>
@endsection