@extends('layouts.app')
@section('title','Detail Data Guru')
@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row" >
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Data Guru</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a>
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
                              <h4 class="card-title">Detail Data Guru</h4>
                              <a href="{{ route('guru.edit', $model->id) }}" class="btn btn-primary btn-sm">
                                 <i class="fa fa-edit"></i> Edit
                              </a>
                          </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-4 text-center">
                                    @if($model->foto)
                                        <img src="{{ asset('foto-guru/'.$model->foto) }}" alt="Foto Guru" class="img-fluid rounded" style="max-width: 200px;">
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
                                          <td><strong>NIP</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->nip }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>NUPTK</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->nuptk }}</td>
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
                                          <td><strong>Bidang Studi</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->bidang_studi }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Pendidikan Terakhir</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->pendidikan_terakhir }}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Alamat</strong></td>
                                          <td>:</td>
                                          <td>{{ $model->alamat }}</td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <a href="{{ route('guru.index') }}" class="btn btn-secondary btn-sm"><i class="fas fa-backward"></i> Kembali</a>
                              <a href="{{ route('guru.edit', $model->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                           </div>
                        </div>
                     </div>
                  </div>
                </section>
            </div>
        </div>
    </div>
@endsection 