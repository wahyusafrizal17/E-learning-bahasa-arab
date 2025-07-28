@extends('layouts.app')
@section('title','Kelola Kelas Siswa')
@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row" >
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Kelola Kelas Siswa</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Siswa</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('siswa.show', $model->id) }}">{{ $model->nama_lengkap }}</a>
                                </li>
                                <li class="breadcrumb-item active">Kelola Kelas
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="content-body">
                <section id="dashboard-analytics">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">Kelola Kelas - {{ $model->nama_lengkap }}</h4>
                              <a href="{{ route('siswa.show', $model->id) }}" class="btn btn-secondary btn-sm">
                                 <i class="fa fa-arrow-left"></i> Kembali ke Detail
                              </a>
                          </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <h5>Kelas yang Diikuti ({{ $model->kelas->count() }})</h5>
                                    @if($model->kelas->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Kelas</th>
                                                        <th>Nama Kelas</th>
                                                        <th>Guru</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($model->kelas as $index => $kelas)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td><span class="badge bg-primary">{{ $kelas->kode_kelas }}</span></td>
                                                        <td>{{ $kelas->nama_kelas }}</td>
                                                        <td>{{ $kelas->guru->nama_lengkap ?? '-' }}</td>
                                                        <td>
                                                            <form action="{{ route('siswa.removeKelas', [$model->id]) }}" method="POST" style="display: inline;">
                                                                @csrf
                                                                <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus siswa dari kelas ini?')">
                                                                    <i data-feather='trash-2'></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p class="text-muted">Siswa belum mengikuti kelas apapun</p>
                                    @endif
                                 </div>
                                 <div class="col-md-6">
                                    <h5>Kelas Tersedia</h5>
                                    @if($kelas_tersedia->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Kelas</th>
                                                        <th>Nama Kelas</th>
                                                        <th>Guru</th>
                                                        <th>Kapasitas</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($kelas_tersedia as $kelas)
                                                    <tr>
                                                        <td><span class="badge bg-primary">{{ $kelas->kode_kelas }}</span></td>
                                                        <td>{{ $kelas->nama_kelas }}</td>
                                                        <td>{{ $kelas->guru->nama_lengkap ?? '-' }}</td>
                                                        <td>{{ $kelas->siswa->count() }}/{{ $kelas->kapasitas }}</td>
                                                        <td>
                                                            @if($kelas->siswa->count() < $kelas->kapasitas)
                                                                <form action="{{ route('siswa.addKelas', [$model->id]) }}" method="POST" style="display: inline;">
                                                                    @csrf
                                                                    <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                                                                    <button type="submit" class="btn btn-success btn-sm">
                                                                        <i data-feather='plus'></i>
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <span class="badge bg-warning">Penuh</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p class="text-muted">Tidak ada kelas tersedia</p>
                                    @endif
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <a href="{{ route('siswa.show', $model->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-backward"></i> Kembali ke Detail</a>
                              <a href="{{ route('siswa.index') }}" class="btn btn-primary btn-sm"><i class="fas fa-list"></i> Daftar Siswa</a>
                           </div>
                        </div>
                     </div>
                  </div>
                </section>
            </div>
        </div>
    </div>
@endsection 