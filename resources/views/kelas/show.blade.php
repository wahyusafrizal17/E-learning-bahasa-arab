@extends('layouts.app')
@section('title','Detail Data Kelas')
@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row" >
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Data Kelas</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('kelas.index') }}">Kelas</a>
                                </li>
                                <li class="breadcrumb-item active">Detail
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
                              <h4 class="card-title">Detail Data Kelas</h4>
                              <a href="{{ route('kelas.edit', $model->id) }}" class="btn btn-primary btn-sm">
                                 <i class="fa fa-edit"></i> Edit
                              </a>
                          </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <table class="table table-borderless">
                                       <tr>
                                          <td width="150"><strong>Kode Kelas</strong></td>
                                          <td width="20">:</td>
                                          <td><span class="badge bg-primary">{{ $model->kode_kelas }}</span></td>
                                       </tr>
                                       <tr>
                                          <td><strong>Nama Kelas</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->nama_kelas }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Guru</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->guru->nama_lengkap ?? '-' }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Kapasitas</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->kapasitas }} siswa</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Tahun Ajaran</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->tahun_ajaran }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Semester</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->semester }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Status</strong></td>
                                          <td>:</td>
                                          <td>
                                            @if($model->status == 'Aktif')
                                                <span class="badge bg-success">{{ $model->status }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ $model->status }}</span>
                                            @endif
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><strong>Deskripsi</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->deskripsi ?? '-' }}</td>
                                       </tr>
                                    </table>
                                 </div>
                                                                  <div class="col-md-6">
                                    <h5>Daftar Siswa ({{ $model->siswa->count() }}/{{ $model->kapasitas }})</h5>
                                    <p class="text-muted">Klik tombol hapus untuk mengeluarkan siswa dari kelas</p>
                                 </div>
                                 <div class="col-md-6">
                                    <h5>Materi Pembelajaran ({{ $model->materi->count() }})</h5>
                                    <p class="text-muted">Daftar materi yang tersedia dalam kelas ini</p>
                                 </div>
                                    @if($model->siswa->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                                                                         <tr>
                                                         <th>No</th>
                                                         <th>Nama</th>
                                                         <th>NIS</th>
                                                         <th>Jenis Kelamin</th>
                                                         <th>Action</th>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($model->siswa as $index => $siswa)
                                                                                                         <tr>
                                                         <td>{{ $index + 1 }}</td>
                                                         <td>{{ $siswa->nama_lengkap }}</td>
                                                         <td>{{ $siswa->nis }}</td>
                                                         <td>{{ $siswa->jenis_kelamin }}</td>
                                                         <td>
                                                            <form action="{{ route('kelas.removeSiswa', [$model->id]) }}" method="POST" style="display: inline;">
                                                                @csrf
                                                                <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus siswa ini dari kelas?')">
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
                                        <p class="text-muted">Belum ada siswa di kelas ini</p>
                                    @endif
                                 </div>
                                 <div class="col-md-6">
                                    @if($model->materi->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Materi</th>
                                                        <th>Kategori</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($model->materi as $index => $materi)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $materi->nama_materi }}</td>
                                                        <td><span class="badge bg-info">{{ $materi->kategori }}</span></td>
                                                        <td>
                                                            @if($materi->status == 'Aktif')
                                                                <span class="badge bg-success">{{ $materi->status }}</span>
                                                            @elseif($materi->status == 'Draft')
                                                                <span class="badge bg-warning">{{ $materi->status }}</span>
                                                            @else
                                                                <span class="badge bg-danger">{{ $materi->status }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p class="text-muted">Belum ada materi dalam kelas ini</p>
                                    @endif
                                 </div>
                              </div>

                                    @if($siswa_tersedia->count() > 0 && $model->siswa->count() < $model->kapasitas)
                                        <hr>
                                        <h6>Tambah Siswa</h6>
                                        <form action="{{ route('kelas.addSiswa', [$model->id]) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <select name="siswa_id" class="form-control" required>
                                                        <option value="">Pilih Siswa</option>
                                                        @foreach($siswa_tersedia as $siswa)
                                                            <option value="{{ $siswa->id }}">{{ $siswa->nama_lengkap }} ({{ $siswa->nis }})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fas fa-plus"></i> Tambah
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    @elseif($model->siswa->count() >= $model->kapasitas)
                                        <p class="text-warning">Kelas sudah penuh</p>
                                    @elseif($siswa_tersedia->count() == 0)
                                        <p class="text-muted">Tidak ada siswa tersedia</p>
                                    @endif
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <a href="{{ route('kelas.index') }}" class="btn btn-secondary btn-sm"><i class="fas fa-backward"></i> Kembali</a>
                              <a href="{{ route('kelas.edit', $model->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                           </div>
                        </div>
                     </div>
                  </div>
                </section>
            </div>
        </div>
    </div>
@endsection 