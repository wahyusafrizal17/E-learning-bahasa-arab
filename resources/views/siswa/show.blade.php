@extends('layouts.app')
@section('title','Detail Data Siswa')
@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row" >
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Data Siswa</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Siswa</a>
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
                              <h4 class="card-title">Detail Data Siswa</h4>
                              <a href="{{ route('siswa.edit', $model->id) }}" class="btn btn-primary btn-sm">
                                 <i class="fa fa-edit"></i> Edit
                              </a>
                          </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-4 text-center">
                                    @if($model->foto)
                                        <img src="{{ asset('foto-siswa/'.$model->foto) }}" alt="Foto Siswa" class="img-fluid rounded" style="max-width: 200px;">
                                    @else
                                        <img src="{{ asset('app-assets/images/avatars/1.png') }}" alt="Default Avatar" class="img-fluid rounded" style="max-width: 200px;">
                                    @endif
                                 </div>
                                 <div class="col-md-8">
                                    <table class="table table-borderless">
                                       <tr>
                                          <td width="150"><strong>Nama Lengkap</strong></td>
                                          <td width="20">:</td>
                                          <td>{{ $model->nama_lengkap }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>NIS</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->nis }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>NISN</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->nisn }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Jenis Kelamin</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->jenis_kelamin }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Tempat Lahir</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->tempat_lahir }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Tanggal Lahir</strong></td>
                                          <td>:</td>
                                          <td>{{ date('d F Y', strtotime($model->tanggal_lahir)) }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>No Telepon</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->no_telepon }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Email</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->email ?? '-' }}</td>
                                       </tr>
                                                                              <tr>
                                          <td><strong>Alamat</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->alamat }}</td>
                                       </tr>
                                    </table>
                                 </div>
                                 <div class="col-md-6">
                                    <h5>Kelas yang Diikuti</h5>
                                    @if($model->kelas->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Kelas</th>
                                                        <th>Nama Kelas</th>
                                                        <th>Guru</th>
                                                        <th>Status</th>
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
                                                            @if($kelas->status == 'Aktif')
                                                                <span class="badge bg-success">{{ $kelas->status }}</span>
                                                            @else
                                                                <span class="badge bg-danger">{{ $kelas->status }}</span>
                                                            @endif
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
                               </div>
                           </div>
                                                       <div class="card-footer">
                              <a href="{{ route('siswa.index') }}" class="btn btn-secondary btn-sm"><i class="fas fa-backward"></i> Kembali</a>
                              <a href="{{ route('siswa.edit', $model->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                              <a href="{{ route('siswa.kelas', $model->id) }}" class="btn btn-info btn-sm"><i class="fas fa-book"></i> Kelola Kelas</a>
                           </div>
                        </div>
                     </div>
                  </div>
                </section>
            </div>
        </div>
    </div>
@endsection 